<?php
session_start();
$category_name=$_POST['cat'];

   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_category;
$cursor = $collection->find(array('category_name' => $category_name));
foreach($cursor as $document)
{$collection->remove(array("_id"=>$document['_id']));
}
header("location:category.php");
?>
