<?php
 if(isset($_POST["btnSubmit"])){
  $db=new mysqli("localhost","root","","test");  
  $name=$_POST["name"];
  $price=$_POST["price"];
  $manufacturer_id=$_POST["manufacturer_id"];
  $db->query("insert into product(name,price,manufacturer_id) values('$name','$price','$manufacturer_id')");
  echo "Successfully added";
 }
?> 
<form action="#" method="post">
   <div>
    name<br/>
    <input type="text" name="name" />
   </div>
 
   <div>
    price<br/>
    <input type="text" name="price" />
   </div>

   <div>
    manufacturer id<br/>
    <input type="text" name="manufacturer_id" />
   </div>
   
    <div> 
    <input type="submit" name="btnSubmit" value="Submit" />
   </div>    
</form>