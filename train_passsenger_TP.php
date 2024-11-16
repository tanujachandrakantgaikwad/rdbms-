create table train(tno int primary key,
tname varchar(20));

 insert into train values(1,'chennai express');
 insert into train values(2,'pune mumbai');
 insert into train values(3,'nashik');

create table passenger(pno int primary key,
pname varchar(20),
addr varchar(20),
age int,
tno int references train);

insert into passenger values(101,'om','pune',32,1);
insert into passenger values(102,'ram','mumbai',12,1);
insert into passenger values(103,'sai','belapur',54,2);
insert into passenger values(104,'omkar','pune',20,3);

create table TP(tno int references train,
pno int references passenger,
p_date date,
seat_no int,
amt int);

insert into TP values(1,101,'2023-11-1',90,2100);
insert into TP values(2,102,'2021-1-10',80,1000);
insert into TP values(3,103,'2022-6-12',690,200);
insert into TP values(1,104,'2023-1-1',910,20000);