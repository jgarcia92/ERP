<?php 
session_start();
$user=$_SESSION['user'];
echo 'Username'.$user.'<br>';
$m=new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_custtrans_info;
$cursor=$collection->find(array('Username'=>$user));
foreach($cursor as $document)
{
echo "Name:";
echo $document['Title'];
echo $document['Firstname'];
echo $document['Lastname'].'<br>';
echo 'Mobile Number'.$document['Mobilenumber'].'<br>';
}
?>
