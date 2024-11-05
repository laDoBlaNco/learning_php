import psycopg2
import hidden
import requests
import json

# so first will do the easy part
secrets = hidden.secrets()

conn = psycopg2.connect(host=secrets['host'],
        port=secrets['port'],
        database=secrets['database'],
        user=secrets['user'],
        password=secrets['pass'],
        connect_timeout=3)

cur = conn.cursor()

# this will run in one go, so I'll redo the table if we have issues and need
# to start over. Since its not necessary to have a restartable process, this will 
# be the simplest to deal with
sql = 'drop table if exists pokeapi cascade;'
print(sql)
cur.execute(sql)

sql = 'CREATE TABLE IF NOT EXISTS pokeapi (id int, body jsonb);'
print(sql)
cur.execute(sql)

ct = 0
for i in range(100):
    ct = ct + 1
    response = requests.get(f"https://pokeapi.co/api/v2/pokemon/{ct}")
    text  = response.text
    sql = 'insert into pokeapi (id,body) values (%s,%s)'
    cur.execute(sql,(ct,text))
    if ct%25==0:
        conn.commit()
        print(ct,'loaded already')
conn.commit()

print('We have success!')
cur.close()



