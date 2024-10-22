-- dbs are by design made to accept sql commands from a variety of sources
-- simultaneously and make them atomically so as not to skew results
-- so the dbase has to enforce a rule so the read and write are done
-- atomically, they can't happen at the same time.

-- to do that postgres 'locks' areas before it starts a sql command that might
-- change an area of the database.

-- This is a key strategy in the competition of db creators. how quickly and non-
-- invasive those locking mechanisms, they better your db is. The atomocity or
-- granularity of your locking mechanism is key for online concurrent systems

-- All other access to that area must wait until the area is unlocked.

-- So single sql statements are atomic, all the inserts will work and get a unique
-- primary key. Which gets which isn't predictable as the dbase will force an
-- ordering on them. 

-- so how do we take advantage of this concurrency:

-- COMPOUND STATEMENTS
-- These statements do more than one thing in one statement for efficiency and 
-- concurrency
insert into fav (post_id,account_id,howmuch)
  values (1,1,1)
returning *;   -- this returning * is the extra piece that forced postgres to give us back
-- the new value after the change, taking advantage that these are atomic.

update fav set howmuch=howmuch+1
  where post_id = 1 and account_id = 1
returning *;  -- again we do another returning, which is like a select * from fav tacked on the end

-- ON CONFLICT
-- sometimes you bump into a constraint and need the query to do something else
-- this will fail for example due to our 'unique' constraint on the post-id and account_id combos
insert into fav (post_id,account_id,howmuch)
  values(1,1,1)
returning *; -- duplicate key value violates unique constraint "fav_post_id_account_id_key"

-- so we use 'on conflict and now have 3 statements in one
insert into fav (post_id,account_id,howmuch)
  values (1,1,1)    -- but if that doesn't work
  on conflict (post_id,account_id) -- on a conflict with these
  do update set howmuch = fav.howmuch + 1 -- do this
returning *; -- and it works, rather than inserting it just increases the howmuch for us.
-- it always works because its all atomic

-- with begin...transaction we can lock the row 'for update' and hold it while we
-- work on it. If someone else comes along to update, they will have to wait. Then
-- we have the option to 'rollback' to our 'begin', or 'commit' our changes

-- There are also other options when we come against a lock, such as 'nowait', or 
-- 'skiplock', etc. 


