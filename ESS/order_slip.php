<?php
session_start();
$m = new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_temp_trans;
$collection2=$db->ess_item_info;
$collection3=$db->ess_custaddress_info;
$collection4=$db->ess_customer_info;
$collection5=$db->ess_organization;
$collection6=$db->ess_custtrans_info;
$date=date("Y/m/d");

//echo $_SESSION['id'];
$cursorx=$collection->find(array('customer_id'=>$_SESSION['user']));
if($cursorx->count()==0)
{
header("location:profile.php");
exit();
}
$cursor3=$collection3->find(array('id'=>new MongoId($_SESSION['id'])));
$cursor4=$collection4->find(array('_id'=>new MongoId($_SESSION['id'])));
echo '<div align="center" text-align="center">';
if($cursor3->count()==0)
{
echo '<h1 align="center">You have not specified any address, go <a href="aupdate.php">here</a> and specify an address to continue';
exit();
}
echo '<h1 align="center"> Order Slip</h1>';
echo "Address:";

foreach($cursor3 as $document3)
{
if($document3['Type']=='Common')
{
$address=$document3['_id'];
echo '<table>';
//echo $document3['Type'].'<br>';
echo $document3['Line1'].', ';
echo $document3['Line2'].', ';
echo $document3['Line3'].', <br>';
echo $document3['City'].', ';
echo $document3['Pincode'].', ';
echo $document3['State'].'<br>';
echo '</table>';
break;
}
else if($document3['Type']=='Bill')
{
$address=$document3['_id'];
//echo $document3['Type'].'<br>';
echo $document3['Line1'].'<br>';
echo $document3['Line2'].'<br>';
echo $document3['Line3'].'<br>';
echo $document3['City'].'<br>';
echo $document3['Pincode'].'<br>';
echo $document3['State'].'<br>';
}
else
{
echo '<h1 align="center">You have not specified any address, go <a href="aupdate.php">here</a> and specify an address to continue';
}
}
$cursor=$collection->find();
//$amount=0
echo "<br><h2>Item Purchased</h2><br>";
foreach($cursor as $document)
{
//echo $document['item_id'];
//$amount=$amount+$document['price'];
$cursor2=$collection2->find(array('_id'=>new MongoId($document['item_id'])));

foreach($cursor2 as $document2)
{
echo 'Category: '.$document2['cat'].'<br>';
echo 'Brand: '.$document2['brand'].'<br>';
echo 'Model: '.$document2['model'].'<br>';
/*$document6=array("item_id"=>$single,"total":$grand_total,"order_date"=>$date,"customer_id"=>$_SESSION['id'],"order_id"=>$order,"adress_id"=>$address,"warehouse_id"=>$warehouse,"status"=>"Pending");
$collection6->insert($document6);
*/


$cursor5=$collection5->find(array('_id'=>new MongoId($document2['org_id'])));

foreach($cursor5 as $document5)
{
echo '<br> Warehouse Address: '.$document5['location'].'<br>';
echo 'Contact No. : '.$document5['contact'].'<br>';
$warehouse=$document5['_id'];
}
}
$order=$document['order_id'];
$grand_total+=$document['price'];

$document6=array("item_id"=>$document['item_id'],"total"=>$grand_total,"order_date"=>$date,"customer_id"=>$_SESSION['id'],"order_id"=>$order,"adress_id"=>$address,"warehouse_id"=>$warehouse,"status"=>"Pending");
$collection6->insert($document6);
} 
echo '<br>(Keep it for further use) Order id:'.$order.'<br>';
echo '<br>Grand Total &#8377;:'.$grand_total;
foreach($cursor4 as $document4)
{
echo "<br><h2>Customer Details</h2><br>";
echo 'Name: '.$document4['Firstname'].' ';
echo $document4['Lastname'].'<br>';
echo 'Mobile Number: '.$document4['Mobilenumber'].'<br>';
echo 'E-Mail: '.$document4['E-mail'].'<br>';
}
echo "Ordered From (ess.com) 'ESS-Think Smart, Buy Smart'";
echo "</div>";
//echo $amount;
/*$cursor2=$collection2->find(array('_id'=>new MongoId($document['id'])));
foreach($cursor2 as $document2)
{
echo $document2['cat'].'<br>';
echo $document2['brand'].'<br>';
}
}*/
$collection->remove(array('customer_id'=>$_SESSION['user']));
?>
