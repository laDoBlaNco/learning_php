# example from:
# https://elasticsearch-py.readthedocs.io/en/master/

from datetime import datetime
from elasticsearch import Elasticsearch 

import hidden

secrets = hidden.elastic()

es = Elasticsearch(
  [secrets['host']],
  http_auth=(secrets['user'],secrets['pass']),
  url_prefix=secrets['prefix'],
  scheme=secrets['scheme'],
  port=secrets['port']
)
indexname = secrets['user']

#start fresh
# https://elasticsearch-py.readthedocs.io/en/master/api.html#indices
res = es.indices.delete(index=indexname,ignore=[400,404])
print('Dropped index')
print(res)

res = es.indices.create(index=indexname)
print('Created the index...')
print(res)

doc = {
  'author':'kimchy',
  'type':'tweet',
  'text':'''For example look at the following text about a clown and
  a car Look at the text and figure out the most common word and how many
  times it the clown ran after the car and the car ran into the tent and
  the tent fell down on the clown and the car
  The imagine that you are doing this task looking at millions of lines''',
  'timestamp':datetime.now(),
}

# note - you can't change the key type after you start indexing documents
res = es.index(index=indexname,id='abc',body=doc)
print('Added document...')
print(res['result'])

res = es.get(index=indexname,id='abc')
print('Retrieved document...')
print(res)

# Tell it to recompute the index - normally it would take up to 30 seconds
# Refresh can be costly - we do it here for demo purposes
res = es.indices.refresh(index=indexname)
print('Index refreshed')
print(res)

# read the documents with a search item (more sophisticated type query)
# https://www.elastic.co/guide/en/elasticsearch/reference/current/query-filter-context.html
x = {
  'query':{
    'bool':{
      'must':{
        'match':{
          'text':'clown'
        }
      },
      'filter':{
        'match':{
          'type':'tweet'
        }
      }
    }
  }
}

res = es.search(index=indexname,body=x)
print('Search results...')
print(res)
print()
print('Got %d Hits:' % len(res['hits']['hits']))
