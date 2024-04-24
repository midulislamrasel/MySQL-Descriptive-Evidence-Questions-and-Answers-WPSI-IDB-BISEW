<!-- Trigger  -->
use test;
drop trigger if exists ad_manufacturer;
delimiter //
create trigger ad_manufacturer after delete on manufacturer
for each row
begin
  delete from product where manufacturer_id=old.id;
end;
//
delimiter ;

<!-- show trigger status\G; -->



<!-- View  -->
create view v_product_list1 as
 select p.id,p.name as product_name,m.name as mfg_name from product p,manufacturer m where m.id=p.manufacturer_id and p.price>5000;

 <!-- select * from v_product_list1; -->




 <!-- Procedure  -->
 use test;
drop procedure if exists add_manufacturer;
delimiter //
create procedure add_manufacturer(name varchar(20),contact varchar(20))
begin
  insert into manufacturer(name,contact)values(name,contact);
end//
delimiter ;

<!-- show procedure status\G; -->
<!-- mysql>call add_manufacturer('Walton','3434343'); -->




