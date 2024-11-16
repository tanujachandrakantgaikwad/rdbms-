          
create table stud1(sno int primary key,
sname varchar(20),
class varchar(20),
address varchar(20));

insert into stud1 values(1,'om','FY','pune');
insert into stud1 values(2,'tanuja','SY','mumbai');
insert into stud1 values(3,'omkar','TY','nashik');

create table teacher(tno int primary key,
tname varchar(20),
qua varchar(20),
experience int);

insert into teacher values(101,'ram','MCA',15);
insert into teacher values(102,'aman','CA',1);
insert into teacher values(103,'sham','BBACA',5);

create table st(sub varchar(20),
sno int references stud1,
tno int references teacher);

insert into st values('PHP',1,101);
insert into st values('DSA',3,102);
insert into st values('DM',2,103);
insert into st values('SE',1,101);

