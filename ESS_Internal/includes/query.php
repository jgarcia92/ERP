<?php
session_start();
$m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_item_info;
$cursor = $collection->find(array("model"=>$_POST['Model_Number'],"brand"=>$_POST['bBrand']));
if($cursor->count()>0)
{foreach($cursor as $document)
{
$_SESSION['model_query']=$_POST['Model_Number'];
$_SESSION['brand_query']=$_POST['bBrand'];
$_SESSION['color']=$document['color'];
$_SESSION['description_query']=$document['description'];
header("location:../productm.php");
exit();
}
}
else
{
$_SESSION['error']=4;
//echo $_SESSION['error'];
header("location:../productm.php");
}
?>
