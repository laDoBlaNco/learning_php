# python3 elastic_mail.py
# pulls data from the web and puts it into an index

import requests
import re 
import hidden
import datecompat
import time
import json
import copy
# import dateutil.parser as parser # if this fails just comment it out

from elasticsearch import Elasticsearch 
from elasticsearch import RequestsHttpConnection

def parsemaildate(md):
  try:
    pdate = parser.parse(tdate)
    test_at = pdate.isoformat()
    return test_at
  except:
    return datecompat.parsemaildate(md)

secrets = hidden.elastic()

# connect to our database
es = Elasticsearch(
  [secrets['host']],
  http_auth=(secrets['user'],secrets['pass']),
  url_prefix=secrets['prefix'],
  scheme=secrets['scheme'],
  port=secrets['port'],
  connection_class=RequestsHttpConnection,
)

# in our test world - we only get one index
indexname = secrets['user']

# we want to start fresh
res = es.indices.delete(index=indexname,ignore=[400,404])
print('Dropped index')
print(res)

res = es.indices.create(index=indexname)
print('Created the index...')
print(res)

baseurl = 'http://mbox.dr-chuck.net/sakai.devel/'

many = 0
count = 0
fail = 0
start = 0
while True:
  if many<1:
    sval = input('How many messages:')
    if len(sval)<1:break
    many = int(sval)

  start+=1

  many-=1
  url = baseurl + str(start) + '/' + str(start+1)

  text = 'None'
  try:
    # Open with a timeout of 30 seconds
    response = requests.get(url)
    text = response.text
    status = response.status_code
    if status != 200:
      print('Error code =',status,url)
      break
  except KeyboardInterrupt:
    print('')
    print('Program interrupted by user...')
    break
  except Exception as e:
    print('Unable to retrieve or parse page',url)
    print('Error:',e)
    fail+=1
    if fail>5:break
    continue

  print(url,len(text))
  count+=1

  if not text.startswith('From '):
    print(text)
    print('Did not find From ')
    fail+=1
    if fail > 5:break
    continue

  pos = text.find('\n\n')
  if pos > 0:
    hdr = text[:pos]
    body = text[pos+2:]
  else:
    print(text)
    print('Could not find break between headers and body')
    fail+=1
    if fail > 5:break
    continue

  # accept with or without < >
  email = None
  x = re.findall('\nFrom: .* <(\S+@\S+)>\n',hdr)
  if len(x) == 1:
    email = x[0]
    email = email.strip().lower()
    email = email.replace('<','')
  else:
    x = re.findall('\nFrom: (\S+@\S+)\n',hdr)
    if len(x) == 1:
      email = x[0]
      email = email.strip().lower()
      email = email.replace('<','')
  
  # hack the date
  sent_at = None
  y = re.findall('\nDate: .*, (.*)\n',hdr)
  if len(y) == 1:
    tdate = y[0]
    tdate = tdate[:26]
    try:
      sent_at = parsemaildate(tdate)
    except:
      print(text)
      print('Parse fail',tdate)
      fail+=1
      if fail > 5 : break
      continue

  # make the headers into a dictionary
  hdrlines = hdr.split('\n')
  hdrdict = dict()
  for line in hdrlines:
    # [('From','"Glenn R. Golden" <ggolden@umich.edu>')]
    y = re.findall('([^ :]*): (.*)$',line)
    if len(y) != 1 : continue
    tup = y[0]
    if len(tup) != 2 : continue
    # print(tup)
    key = tup[0].lower()
    value = tup[1].lower()
    hdrdict[key] = value

  # Override the date field
  hdrdict['date'] = sent_at

  # Reser the fail counter
  fail = 0
  doc = {'offset':start,'sender':email,'headers':hdrdict,'body':body}
  res = es.index(index=indexname,id=str(start),body=doc)
  print('   ',start,email,sent_at)

  print('Added document...')
  print(res['result'])

  if count % 100 == 0 : time.sleep(1) 
