<?php
session_start();   
// connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_temp_trans;

   // now remove the document
   $cursor=$collection->find(array("customer_id"=>$_SESSION['user']));
foreach($cursor as $document)
{
$collection->remove(array("_id"=>new MongoId($document['_id'])));
}
session_destroy();
header("location:../profile.php");
exit;
?>
