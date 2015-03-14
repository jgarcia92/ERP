<?php
$m = new MongoClient();
  // echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
 echo "Connected";
   //echo "Database mydb selected";
   $collection = $db->ess_manufacturer;
   //echo "Collection selected succsessfully";
   $check=$_POST['Name'];   
echo $check;
   $cursor = $collection->find(array("Name"=>$check);
   echo "Connected";
$location = $_POST['location'];
$collection->update(array("Name"=>$check), array('$set'=>array("location"=>$location))); 

?>
