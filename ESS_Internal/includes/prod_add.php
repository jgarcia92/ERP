<?php
session_start();
$cat=$_POST['cars'];
$model_no=$_POST['Model_Number'];
$brand=$_POST['bBrand'];
$color=$_POST['cColor'];
$item_status=$_POST['Item_status'];
$pmu=$_POST['PMU'];
$description=$_POST['dDescription'];
$count=0;
$m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_item_info;
$collection2=$db->ess_organization;
$cursor = $collection->find(array('model' => $model_no));
$cursor2 = $collection->find(array('brand' => $brand));
if(isset($_POST['update_table']))
{
if($cursor->count()>0)
{
if($cursor2->count()>0)
{
foreach($_POST['org'] as $org_name) 
{
$cursor4 =$collection2->findOne(array('location'=>$org_name));
//echo $cursor4['_id'];
$cursor3 = $collection->find(array('model'=>$model_no,'brand'=>$brand,'org_id'=>$cursor4['_id']
));
foreach($cursor3 as $document)
{
//echo $document['org_id'];
$collection->update(array("_id"=>$document['_id']), array('$set'=>array("color"=>$color,"item_status"=>$item_status,"pmu"=>$pmu,"description"=>$description,"onhand"=>60)));
}
}
$_SESSION['error']=5;
header('location:../productm.php');

exit();
}
}
}
if($cursor->count()>0)
{
$_SESSION['error']='1';
header('location:../productm.php');
}   
else
{
$gridfs = $m->selectDB('db_ess')->getGridFS();
$id=$gridfs->storeUpload('pic',array (
			"model" => $model_no 
	));
foreach($_POST['org'] as $check) 
{
$cursor3 =$collection2->findOne(array('location'=>$check));
$cursor3['_id'];

$document = array( 
      "cat"=>$cat,
      "model" => $model_no, 
      "brand"=>$brand,
      "color"=>$color,
      "item_status"=>$item_status,
      "pmu"=>$pmu,
      "description"=>$description,
      "img_id"=>$id,
      "org_id"=>$cursor3['_id'],
	"onhand"=>"60"			
);
$collection->insert ( $document );
}

header("location:../updatepricing.php?cat=$cat&brand=$brand&model=$model_no");
}
?>
