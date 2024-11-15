# python3 elastic_book.py
from elasticsearch import Elasticsearch 
import time
import copy
import hidden
import uuid
import json
import hashlib

bookfile = input("Enter book file (i.e. pg18866.txt): ")
if bookfile == '':bookfile = 'pg18866.txt'
indexname = bookfile.split('.')[0]

# make sure we can open the file
fhand = open(bookfile)

# load the secrets
secrets = hidden.elastic()

es = Elasticsearch(
  [secrets['host']],
  http_auth=(secrets['user'],secrets['pass']),
  url_prefix=secrets['prefix'],
  scheme=secrets['scheme'],
  port=secrets['port']
)
indexname = secrets['user']

# start fresh
# https://elasticsearch-py.readthedocs.io/en/master/api.html#indices
res = es.indices.delete(index=indexname,ignore=[400,404])
print("Dropped index",indexname)
print(res)

res = es.indices.create(index=indexname)
print("Created the index...")
print(res)

para = ''
chars = 0
count = 0
pcount = 0
for line in fhand:
  count+=1
  line = line.strip()
  chars+=len(line)
  if line == '' and para == '' : continue
  if line == '' :
    pcount+=1
    doc = {
      'offset':pcount,
      'content':para
    }

    # use the paragraph count as primary key
    # pkey = pcount

    # Use a GUID as the primary key
    # pkey = uuid.uuid4()

    # Compute a SHA256 of the entire document as the primary key
    # because the pkey is based on the document contents
    # the "index" is in effect INSERT ON CONFLICT UPDATE unless 
    # the document contents change
    m = hashlib.sha256()
    m.update(json.dumps(doc).encode())
    pkey = m.hexdigest()

    res = es.index(index=indexname,id=pkey,body=doc)

    print('Added document',pkey)
    # print(res['result'])

    if pcount % 100 == 0:
      print(pcount,'loaded...')
      time.sleep(1)

    para = ''
    continue

  para = para + ' ' + line

# Tell it to recompute the index
res = es.indices.refresh(index=indexname)
print("Index refreshed",indexname)
print(res)

print(' ')
print('Loaded',pcount,'paragraphs',count,'lines',chars,'characters')

