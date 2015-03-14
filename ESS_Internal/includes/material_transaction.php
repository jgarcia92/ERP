<?php
$m=new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_item_transaction;
$cursor=$collection->find();
echo '<div align="center">'
foreach($cursor as $document)
{
echo $document['item_id'].'<br>';
echo $document['Quantity'].'<br>';
echo $document['trans'].'<br>';
}
echo'</div>';
