use test;
drop table if exists manufacturer;
create table manufacturer(
  id int(10) primary key auto_increment,
  name varchar(50),  
  contact text
);
 
insert into manufacturer(name,contact)values('APCL','08340830');
insert into manufacturer(name,contact)values('ISL','2345454');
insert into manufacturer(name,contact)values('IDB','9390033');
 
drop table if exists product ;
create table product (
  id int(10) primary key auto_increment,
  name varchar(50),  
  price double, 
  manufacturer_id int(10)
);
 
insert into product(name,price,manufacturer_id)values('Camera',5000,1);
insert into product(name,price,manufacturer_id)values('PC',20000,1);
insert into product(name,price,manufacturer_id)values('HRM',100000,2);
insert into product(name,price,manufacturer_id)values('ERP',3000000,2);
insert into product(name,price,manufacturer_id)values('Car',900000,3);