<?php
session_start();
$email=$_POST['email'];
$uname=$_POST['uname'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$title=$_POST['title'];
$mnumber=$_POST['mnumber'];
$tnumber=$_POST['tnumber'];
   // connect to mongodb
   $m = new MongoClient();
   // select a database
$check=$_SESSION['id'];
   $db = $m->db_ess;
   $collection = $db->ess_custaddress_info;
$cursor = $collection->find(array("id"=>$check),array("_id"=>1,"Type"=>1,"id"=>1,"Line1"=>1,"Line2"=>1,"Line3"=>1,"City"=>1,"Pincode"=>1,"State"=>1,"Landmark"=>1));
$count=1;
if($cursor->count()==0)
{
$document = array( 
      "id"=>$_SESSION['id'],
      "Line1"=>$email,
      "Type" => $title, 
      "Line2"=>$uname,
      "Line3"=>$password,
      "City"=>$fname,
      "Pincode"=>$lname,
      "State"=>$mnumber,
      "Landmark"=>$tnumber

);
   $collection->insert($document);
   echo "You have updated the address successfully";
header("location:../profile.php");
}
foreach($cursor as $document)
{
if($document['id']==$check)
{
echo "Problem id";
echo $cursor->count();
echo $count;
if($document['Type']==$title)
{echo "Problem title";
echo $document['_id'];
$collection->update(array("_id"=>$document['_id']), array('$set'=>array("City"=>$fname,"Line1"=>$email,"Line2"=>$uname,"Line3"=>$password,"Pincode"=>$lname,"State"=>$mnumber,"Landmark"=>$tnumber)));
header("location:../profile.php");
break;
}
else{
if($count==($cursor->count()))
{
$document = array( 
      "id"=>$_SESSION['id'],
      "Line1"=>$email,
      "Type" => $title, 
      "Line2"=>$uname,
      "Line3"=>$password,
      "City"=>$fname,
      "Pincode"=>$lname,
      "State"=>$mnumber,
      "Landmark"=>$tnumber
);
   $collection->insert($document);
echo "You have updated the address successfully";
header("location:../profile.php");
break;
}
else
{
$count=$count+1;
continue;
}
}
}
}
?>
