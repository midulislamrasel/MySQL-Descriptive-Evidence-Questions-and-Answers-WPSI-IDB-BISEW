<?php
 if(isset($_POST["btnSubmit"])){
    $db=new mysqli("localhost","root","","round59");  
    $mfg=$_POST["txtMfg"];
    $contact=$_POST["txtContact"];
    $db->query("call add_manufacturer(' $mfg','$contact')");
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