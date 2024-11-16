create table company(cno int primary key,
cname varchar(20),
c_city varchar(20),
cshare_value int);

insert into company values(1,'reliance','pune',100);
insert into company values(2,'bharti aritel','mumbai',10);
insert into company values(3,'HDFC','nashik',200);
insert into company values(4,'tata services','pune',120);

create table person(pno int primary key,
pname varchar(20),
pcity varchar(20),
p_phone int,
cno int references company);

insert into person values(101,'om','belapur',234567891,1);
insert into person values(102,'sai','shrirampur'123457891,2);
insert into person values(103,'ram','solapur',973427891,3);
insert into person values(104,'omkar','rampur',232344567,4);

create table CP(cno int references company,
pno int references person,
no_of_share int); 

insert into CP values(1,101,212);
insert into CP values(2,103,54);
insert into CP values(4,104,232);
insert into CP values(3,102,21);
