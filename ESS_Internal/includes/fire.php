<html>
<body>
<h1 align="center">Enter the UserName of the employee</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<table align="center">
<tr>
<td><input type="text" placeholder="UserName" name="username" required="required">
<td><input type="submit" value="Submit">
</tr>
</table>
</form>
</body>
</html>
<?php
session_start();   
// connect to mongodb
   $m = new MongoClient();
   //echo "Connection to database successfully";
   // select a database
   $db = $m->db_ess;
   //echo "Database mydb selected";
   $collection = $db->ess_employee;

   // now remove the document
  $collection=$db->ess_employee;
if($_POST['username']=="admin")
{
echo '<h1 align="center">Cannot Delete Administrator</h1>';
exit();
}
  $cursor = $collection->find(array("username"=>$_POST['username']),array("_id"=>1));
foreach($cursor as $document)
{
$collection->remove(array("_id"=>$document['_id']));
}
?>
