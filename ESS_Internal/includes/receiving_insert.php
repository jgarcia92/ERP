<?php
session_start();
$purchase_order_no=$_POST['purchase_order_no'];
$model=$_POST['model'];
$brand=$_POST['brand'];
$cat=$_POST['cat'];
$quantity=$_POST['quantity'];
   // connect to mongodb
   $m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_receiving;
$collection2=$db->ess_item_info;
$cursor=$collection->find(array('purchase_order_no'=>$purchase_order_no));
if($cursor->count()>0)
{
$_SESSION['error']=1;
header("location:../receiving.php");
}
$document = array( 
      "purchase_order_no"=>$purchase_order_no,
      "brand" => $brand, 
"category" => $model, 
"model"=>$cat,
"quantity"=>$quantity,
      );
$cursor2=$collection2->find(array("brand"=>$brand,"model"=>$cat));
foreach($cursor2 as $code)
{
$amt=$code['onhand'];
}
$total=$amt+$quantity;
echo $cursor2->count();
echo $total;
$collection2->update(array("brand"=>$brand,"model"=>$cat), array('$set'=>array("onhand"=>$total)));
/*$cursor2=$collection2->find(array("brand"=>$brand,"model"=>$cat));
foreach($cursor2 as $document2)
{
$amt=$document2['onhand'];
echo ($amt+$quantity);
}
$collection2->update(array("brand"=>$brand,"model"=>$cat),array('$set'=>array("onhand"=>($amt+$quantity))));	
*/
   $collection->insert($document);
exit();
//header("location:../receiving.php");
?>
