<?php
$m = new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_item_info;
$cat=$_GET['cat'];
$cursor=$collection->find(array('cat'=>$cat));
$previous="";
foreach($cursor as $document)
{
if($document['brand']==$previous)
{
continue;
}
echo '<p><a href="brand_products.php?brand='.$document['brand'].'&cat='.$document['cat'].'" target="right">'.$document['brand'].'</a></p>';
$previous=$document['brand'];
}
?>
<!--
$type=$db->command(array("distinct" => "ess_item_info", "key" => "img_id"));
//$collection=$db->ess_item_info;
//$cursor=$collection->find();
//foreach($cursor as $document)
$count=0;
foreach($type['values'] as $document)
{-->
