<?php
   $db=new mysqli("localhost","root","","round59");    
 
   if(isset($_POST["btnSubmit"])){
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
  <input type="submit" value="Delete" name="btnSubmit" />
</div>
</form>