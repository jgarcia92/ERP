<?php 
$postedUsername = $_POST['username']; //Gets the posted username, put's it into a variable.
			$postedPassword = md5($_POST['password']); //Gets the posted password, put's it into a variable.
//echo $postedUsername;
//echo $postedPassword;
   // connect to mongodb
   $m = new MongoClient();
  // echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_employee;
   //echo "Collection selected succsessfully";
   $cursor = $collection->find();
   // iterate cursor to display title of documents
   foreach ($cursor as $document) {
      if($postedUsername==$document["username"])
{
if($postedPassword==$document["password"])
{
session_start();
$_SESSION['type']=$document["type"];
if($document["type"]=="Manager")
header('location:../manager_login.php');
else
if($document["type"]=="PManager")
header('location:../productm.php');
else
if($document["type"]=="WManager")
header('location:../warehousem.php');
else
header('location:../warehousem.php');
?>
<?php
}
}
}				
?>
<html>
<script type="text/javascript">
					<!--
					window.location = "etest_login.php"
					//-->
					</script>
<script>
window.close();
</script>
</html>
