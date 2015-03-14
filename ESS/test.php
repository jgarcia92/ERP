<?php
session_start();
$m = new MongoClient();
$db=$m->db_ess;
$collection5=$db->ess_organization;
$cursor5=$collection5->find(array('_id'=>new MongoId($document2['org_id'])));
foreach($cursor5 as $document5)
{
echo $document5['location'];
}
?>
