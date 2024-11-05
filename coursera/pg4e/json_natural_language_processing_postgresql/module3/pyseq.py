# This is for the pg4e module on Python and Postgres
# Graded assignment for Kevin Whiteside
# I am typing this all out as I feel I learn better without all of the copy pasting

# py pyseq.py

import psycopg2
import hidden
import time

#load our secrets
secretinfo = hidden.secrets()

conn = psycopg2.connect(host=secretinfo['host'],
        port=secretinfo['port'],
        database=secretinfo['database'],
        user=secretinfo['user'],
        password=secretinfo['pass'],
        connect_timeout=3)

cur = conn.cursor()

sql = 'drop table if exists pythonseq cascade;'  # don't forget the ';'
print(sql)
cur.execute(sql)

sql = 'create table pythonseq (iter int,val int);'
print(sql)
cur.execute(sql)

conn.commit()

# Not sure why we need to print to the screen since the assignment is just to insert
# into the database, so I'm changing that piece of the code. 
# NOTE: I also found what I think is a type. The code sample uses 'number' than 'value', but
# they should both be the same.
num = 880564
ct = 0
for i in range(300):
    ct = ct + 1
    itr = i + 1
    sql = 'insert into pythonseq (iter,val) values (%s,%s);'
    cur.execute(sql,(itr,num))
    num = int((num * 22) / 7) % 1000000
    if ct % 50 == 0 : conn.commit()
    if ct % 100 == 0 : 
        print(ct, 'loaded...')
        time.sleep(1)
print('Success!')

conn.commit()
cur.close()


