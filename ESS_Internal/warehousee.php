<?php
$m=new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_custtrans_info;
$collection2=$db->ess_item_info;
$cursor=$collection->find(array("status"=>"Pending"));
if($cursor->count()==0)
{
echo '<h1 align="center">No Pending Order</h1>';
exit();
}
echo'<div align="center">';
foreach($cursor as $document)
{
if($document['status']!="Pending")
{
continue;
}
echo "<h3>Item: ".$document['item_id']."</h3><br>";
echo "<h3>Customer: ".$document['customer_id']."</h3><br>";
$cursor2=$collection2->find(array("_id"=>$document['item_id']));
foreach($cursor2 as $code)
{
if($code['onhand']<10)
{
echo"<h3>Please create a receiving form as this product is low on quantity<a href='receiving.php'> Purchase from supplier</a></h3>";
}
echo "<h3> Brand: ".$code['brand']."</h3>";
echo "<h3> Item: ".$code['brand']."</h3>";
echo "<h3> Category: ".$code['cat']."</h3>";
echo "<h3> Quantity Single</h3>";
echo "<h3>On Hand ".$code['onhand']."</h3><br>";
}
echo '<form action="adjust.php?cust='.$document['customer_id'].'&item='.$document['item_id'].'" method="post"><input type="submit" value="confirm"></form>';
}
echo '</div>';
?>
