create table crop(c_no int primary key,
c_name varchar(20),
c_season varchar(20),
pesticides varchar(20));

insert into crop values(1,'rice','winter','carbary');
insert into crop values(2,'fiber crops','autumn','acephate');
insert into crop values(3,'cotton','winter','ddt');
insert into crop values(4,'wheat','summer','endrin');

create table farmer(f_no int primary key,
f_name varchar(20),
F_location varchar(20));

insert into farmer values(101,'om','belapur');
insert into farmer values(102,'ram','rampur');
insert into farmer values(103,'sai','solapur');
insert into farmer values(104,'omkar','shrirampur');

create table CF(c_no int references crop,
f_no int references farmer,
year int);

insert into CF values(1,101,2021);
insert into CF values(2,104,2022);
insert into CF values(3,102,2023);
insert into CF values(4,103,2021);
insert into CF values(1,104,2024);