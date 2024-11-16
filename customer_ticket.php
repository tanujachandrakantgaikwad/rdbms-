create table customer(cno int primary key,
cname varchar(20),
c_city varchar(20),
cpho int);

insert into customer values(1,'om','rampur',9921153014);
insert into customer values(2,'ram','shrirampur',9922971329);
insert into customer values(3,'sai','solapur',9373337032);
insert into customer values(4,'omkar','belapur',7040105160);

create table ticket(tno int ,
booking_date date,
fare int,
traveling_date date,
cno int references customer);

insert into ticket values(101,'2000-1-2-','2000','2000-12-7',1);
insert into ticket values(102,'2024-7-2','2000','2024-8-7',3);
insert into ticket values(103,'2023-1-1','2000','2023-11-12',2);
insert into ticket values(104,'2008-11-1','2000','2008-1-12',4);
