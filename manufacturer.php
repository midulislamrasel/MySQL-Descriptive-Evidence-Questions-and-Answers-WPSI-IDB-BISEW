


<!-- =========manufacturer====== -->
<?php
 if(isset($_POST["btnSubmit"])){
  $db=new mysqli("localhost","root","","round59");  
  $mfg=$_POST["txtMfg"];
  $contact=$_POST["txtContact"];
  $db->query("insert into manufacturer(name,contact) values(' $mfg','$contact')");
  echo "Successfully added";
 }
?> 
<form action="#" method="post">
   <div>
    Manufacturer<br/>
    <input type="text" name="txtMfg" />
   </div>
 
   <div>
    Contact<br/>
    <input type="text" name="txtContact" />
   </div>
   
    <div> 
    <input type="submit" name="btnSubmit" value="Submit" />
   </div>    
</form>

<!-- =======PRODUCT== -->
<?php
 if(isset($_POST["btnSubmit66"])){
  $db=new mysqli("localhost","root","","round59");  
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
    <input type="submit" name="btnSubmit66" value="Submit" />
   </div>    
</form>


<!-- ====== Deletes ====== -->
<?php
   $db=new mysqli("localhost","root","","round59");    
 
   if(isset($_POST["btnSubmit0"])){
      $mfg_id=$_POST["cmbMfg"];
      
      $db->query("delete from manufacturer where id='$mfg_id'");
      echo "Successfully deleted!";
 
   }
 
?>
 
<form action="#" method="post">
<div>Manufacturer <br/>
<select name="cmbMfg">
  <?php
     $result=$db->query("select id,name from manufacturer");      
     while($row=$result->fetch_object()){
       echo "<option value='$row->id'>$row->name</option>";
     }
  ?>
</select>
</div>
<div>
  <input type="submit" value="Delete" name="btnSubmit0" />
</div>
</form>

<!-- ==========vew ==== -->
<?php
        $db=new mysqli("localhost","root","","round59");    
        
        $result=$db->query("select id,product_name,mfg_name from v_product_list1");
        while(list($id,$product_name,$mfg_name)=$result->fetch_row()){
           echo $id." ".$product_name." ".$mfg_name."<br/>";
        }
 
   
 
   ?>