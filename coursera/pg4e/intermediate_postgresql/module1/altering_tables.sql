-- altering dbs and tables already created is very powerful, below let's
-- make some errors we need to correct:
create table account(
  id serial,
  email varchar(128) unique,
  created_at date not null default now(),
  updated_at date not null default now(),
  primary key (id)
);

create table post(
  id serial,
  title varchar(128) unique not null,
  content varchar(1024),  -- we'll need to extend this one later
  account_id int references account (id) on delete cascade,
  created_at timestamptz not null default now(),
  updated_at timestamptz not null default now(),
  primary key (id)
);

create table fav(
  id serial,
  oops text,
  post_id int references post (id) on delete cascade,
  account_id int references account(id) on delete cascade,
  unique(post_id,account_id),
  primary key (id)
);

-- weeks later we can do a 
alter table fav drop column oops;
alter table post alter column content type text;
alter table fav add column howmuch int;



