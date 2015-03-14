
<?php
session_start();
$category_name=$_POST['cat'];
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_category;
$cursor = $collection->find(array('category_name' => $category_name));
$_SESSION['error']=0; 
if($cursor->count()>0)
{
$_SESSION['error']=6;
header("location:category.php");
}
else
{
$document = array( 
"category_name"=>$category_name);
$collection->insert($document);
header("location:category.php");
}
?>
