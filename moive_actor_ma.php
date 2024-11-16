
create table movie(mno int primary key,
mname varchar(20),
rel_year int);

insert into movie values(1,'KGF',2022);
insert into movie values(2,'A Aa',2021);
insert into movie values(3,'KGF2',2024);

create table actor(ano int primary key,
aname varchar(10));

insert into actor values(101,'prabhas');
insert into actor values(102,'nitiin');
insert into actor values(103,'samantha');

create table ma(rate int,
mno int references moive,
ano int references actor);

insert into ma values(2000,1,101);
insert into ma values(20000,2,101);
insert into ma values(12000,3,103);
insert into ma values(20100,1,102);
