<?php
$m = new MongoClient();
$db=$m->db_ess;
$collection2=$db->ess_pricing_info;
//$cat=$_GET['cat'];
//$brand=$_GET['brand'];
$cursor2=$collection2->find(array('Category'=>$docu['cat'],'Brand'=>$docu['brand']));
foreach($cursor2 as $document2)
{
echo' <h4>Price &#8377:'.$document2['price'].'</h4>';
}
?>
