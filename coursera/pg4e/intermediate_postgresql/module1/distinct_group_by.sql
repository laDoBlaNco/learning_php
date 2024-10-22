create table racing(
  make varchar(50),
  model varchar(50),
  year int,
  price int
);

insert into racing
values ('Nissan','Stanza',1990,2000),
       ('Dodge','Neon',1995, 800),
       ('Dodge','Neon',1998,2500),
       ('Dodge','Neon',199,3000),
       ('Ford','Mustang',2001,1000),
       ('Ford','Mustang',2005,2000),
       ('Subaru','Impreza',1997,1000),
       ('Mazda','Miata',2001,5000),
       ('Mazda','Miata',2001,3000),
       ('Mazda','Miata',2001,2500),
       ('Mazda','Miata',2002,5500),
       ('Opel','GT',1972,1500),
       ('Opel','GT',1969,7500),
       ('Opel','Cadet',1973,500);

-- So with distinct we can remove the vertical duplication if its just simple
-- non-repetitive columns
select distinct model from racing;

-- distinct on will allow us multiple columns but being distinct on one
-- allowing repeats in others
select distinct on (model) make,model from racing;

-- With group by we'll go back to the timezone data, if I have access 
-- from here
select * from pg_timezone_names;

select * from pg_timezone_names where name like '%Hawaii%';

-- so by grouping by a column, we remove the repitition, so what do we do with the other
-- columns, we use an aggregate function to get a single value from them
select count(*), abbrev
from pg_timezone_names
group by abbrev;

-- 'where' must be executed before the group by so if we want to filter
-- after or with the aggregate, we need to use 'having'
select count(abbrev) as ct, abbrev
from pg_timezone_names
where is_dst = 't'
group by abbrev
having count(abbrev) > 10; -- you can't put an aggregate in a where clause



