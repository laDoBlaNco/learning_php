-- a subquery is just a query in a query. You use a value or set of 
-- values in a query that are computed by another query

-- db admins hate sub-queries because they aren't efficient and they
-- don't allow the db to optimize because we are telling it how to get
-- the data. But they are great for data manipulation, mining 
-- and analysis

-- this what we did before
select count(abbrev) as ct,abbrev from pg_timezone_names
where is_dst='t' group by abbrev having count(abbrev) > 10;

-- but we can do the same with sub-queries but again making it harder
-- for postgres to optimize
select ct,abbrev from
(
  select count(abbrev) as ct,abbrev
  from pg_timezone_names
  where is_dst = 't'
  group by abbrev
) as zap
where ct > 10;
-- and we get the same thing.