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
   $collection = $db->ess_customer_info;
   //echo "Collection selected succsessfully";
   $cursor = $collection->find(array("Username"=>$postedUsername));
if($cursor->count()==0)
{
header("location:etest_login.php?error=No Account Exists Please Sign Up");
exit();
}
   // iterate cursor to display title of documents
   foreach ($cursor as $document) {
      if($postedUsername==$document["Username"])
{
if($postedPassword==$document["Password"])
{
session_start();
$_SESSION['user']=$document["Username"];
$_SESSION['id']=$document["_id"];
$_SESSION['Name']=$document["Firstname"];
header('location:../profile.php');
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
