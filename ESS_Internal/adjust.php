<?php
$m=new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_custtrans_info;
$collection2=$db->ess_item_info;
$cursor=$collection2->find(array("_id"=>new MongoId($_GET['item'])));
$cursorx=$collection->find(array("item_id"=>new MongoId($_GET['item'])));
$sub=1;
foreach($cursor as $document)
$current=$document['onhand'];
$new=$current-$sub;
$collection2->update(array("_id"=>new MongoId($_GET['item'])),array('$set'=>array("onhand"=>$new)));
echo $collection->find(array("item_id"=>new MongoId($_GET['item']),"status"=>"Pending"))->count();
$collection->update(array("item_id"=>new MongoId($_GET['item']),"status"=>"Pending"),array('$set'=>array("status"=>"Shipped")));
//echo "Successful";
header("location:warehousee.php");
?>
