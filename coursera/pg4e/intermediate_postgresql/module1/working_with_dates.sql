-- TimeStamp with Time Zones - timestamptz

-- select now(),now() at time zone 'utc',now() at time zone 'hst';
-- select * from pg_timezone_names;


-- Casting to different types - convert from one type to another
select now()::date,cast(now() as date),cast(now() as time);
-- intervals for interval math
select now(),now()-interval '2 days', (now() - interval '2 days')::date;

-- using date_trunc() - sometimes we want to just discard some fo the accuracy
-- that is in a timestamp

-- Not all queries that return the same results has the same performance
-- table scans full vs using unique indexes