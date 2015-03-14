
<html>
<title>Category</title>
<body>
<h2 align="center">CATEGORY INTERNAL FORM</h2>
<?php 
session_start();
if($_SESSION['error']==6)
{echo"<h2 align='center'>Error! Name already exists</h2>";
$_SESSION['error']=0;
}
?>
<form action="cat.php" method='post'>
<table align="center">
<br>
<tr>
<td>
Add a New Category: </td><td><input type="text" name="cat" required="required">
</td>
</tr>
<br>
 <tr>
    <td><input type="submit" value="Add"> </td>
    <td><input type="reset" value="Reset" > </td>
    </tr>
</table>
</form>
<form action="cat_edit.php" method="POST">
<table align="center">
<br>
<tr>
<td>
<!--$gridFS = $database->getGridFS ();
	
	$username = $_SESSION ['username'];
	
	$id = $gridFS->storeUpload ( 'pic', array (
			"username" => $username 
	) );-->
Category: </td><td><select name="cat">
<?php
$m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_category;
   $cursor=$collection->find();
foreach($cursor as $document)
{
echo '<option value="'.$document['category_name'].'">'.$document['category_name'].'</option>';
}
?>
</select>
</td>
</tr>
<tr>
<td>
New Category Name: </td><td><input type="text" name="cat_new" required="required">
</td>
</tr>
<br>
 <tr>
    <td><input type="submit" value="Update"> </td>
    <td><input type="reset" value="Reset" > </td>
    </tr>
</table>
</form>
<form action="cat_delete.php" method='post'>
<table align="center">
<br>
<tr>
<td>
<!--$gridFS = $database->getGridFS ();
	
	$username = $_SESSION ['username'];
	
	$id = $gridFS->storeUpload ( 'pic', array (
			"username" => $username 
	) );-->
Category: </td><td><select name="cat">
<?php
$m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_category;
   $cursor=$collection->find();
foreach($cursor as $document)
{
echo '<option value="'.$document['category_name'].'">'.$document['category_name'].'</option>';
}
?>
</select>
</td>
</tr>
<br>
 <tr>
    <td><input type="submit" value="Delete"> </td>
    <td><input type="reset" value="Reset" > </td>
    </tr>
</table>
</form>
</body>
</html>
