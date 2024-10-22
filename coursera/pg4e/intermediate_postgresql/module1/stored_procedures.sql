-- Nto everyone likes stored procedures, especially if you are moving databases
-- often. they aren't portable at all. 
-- Performance wise they are great, but again not portable if you have to move
-- to other dbs.

-- A stored procedure is a bit of resuable code that runs inside of the db server
-- Its like the function for sql
-- Technically there are multtiple language choices but just use 'plpgsql'
-- Generally quite non-portble as stated
-- Usually the goal is to have fewer sql statements.

-- You should have a very strong reason to use them
  -- major performance problem
  -- Harder to test / modify
  -- No database portability
  -- Some rule that *must* be enforced

-- So fi we look at our 'updated-at' field from the fav table, we had the issue
-- that we need to update it with now() everytime we do an update. But with a 
-- stored procedure 'trigger' we can do it without having to manually do that update.

-- this will update but it won't give us the updated date correctly
update fav set howmuch=howmuch+1
  where post_id = 1 and account_id = 1
returning *;

select * from post; -- the dates aren't changed



-- first create the function which is like putting code into our db
create or replace function trigger_set_timestamp()
returns trigger as $$
begin
  new.updated_at = now();
  return new;
end;
$$ language plpgsql;

-- then create the trigger for that function to happen
create trigger set_timestamp 
before update on fav
for each row
execute procedure trigger_set_timestamp();

create trigger set_timestamp 
before update on post
for each row
execute procedure trigger_set_timestamp();

create trigger set_timestamp 
before update on content
for each row
execute procedure trigger_set_timestamp();

-- then this will implicitly work rather than us updating this manually.
update fav set howmuch=howmuch+1
  where post_id = 1 and account_id = 1
returning *;
select * from post;

-- THIS DIDN'T WORK, SO NOT SURE WHAT THE DEAL IS. BUT BEING THAT THESE
-- AREN'T RECOMMENDED TO BE USED MUCH AND REALLY ONLY THE POSTGRES MASTERS
-- USE THEM, I'VE GOT TIME TO PICK THEM UP LATER.