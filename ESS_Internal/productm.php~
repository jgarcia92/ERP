<html>
<title>Product_Manager</title>
<body>
<?php 
session_start();
if($_SESSION['error']=='5')
echo "<h1 align='center'>Successfully Updated the table</h1>";
if($_SESSION['error']=='1')
echo"<h1 align='center'>Model name already exists</h1>";
else
if($_SESSION['error']=='2')
echo"<h1 align='center'>Brand name already exists</h1>";
else
if($_SESSION['error']=='3')
echo"<h1 align='center'>Organizations are not selected</h1>";
if($_SESSION['error']=='4')
echo"<h1 align='center'>No such brand or model</h1>";
$_SESSION['error']=0;
?>
<h2 align="center">PRODUCT MANAGER INTERNAL FORM</h2>
<h2 align="center"><a href="includes/category.php">Category</a></h2>
<h2 align="center"><form action="pricefirst.php" method="POST"><input type="text" name="query"><input type="submit" value="Update Pricing List"></a></h2>
</form>
<form action='includes/prod_add.php' enctype="multipart/form-data" method='POST'>
<table align="center">
<br>
<tr>
<td>
<!--$gridFS = $database->getGridFS ();
	
	$username = $_SESSION ['username'];
	
	$id = $gridFS->storeUpload ( 'pic', array (
			"username" => $username 
	) );-->
Category: </td><td><select name="cars">
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
<td>Brand: </td><td><input type="text" name="bBrand" value="<?php echo $_SESSION['brand_query'];
?>"
 required="required" placeholder="Brand" title="Brand Of Product">
</td>
</tr>
<br>
<tr>
<td>Model Number: </td><td><input type="Text" name="Model_Number"
value="<?php echo $_SESSION['model_query'];
?>" required="required" placeholder="Model Number" title="Provide Model Number">
</td>
</tr>
<tr>
<td>Color: </td><td><input type="text" name="cColor" value="<?php echo $_SESSION['color'];
?>" required="required" placeholder="Color" title="Color of Product">
<br>
<tr>
<td>Item Status:</td><td><select name="Item_status">
<option value="Active">Active</option>
<option value="End of life">End of life</option>
</select>
</tr>
<tr>
<td>Primary Unit Of Measurement:</td><td><input type="text" name="PMU" value="Each" required="required" placeholder="Each" title="Give Primary Unit Of Measurement"></td>
</tr>
<tr>
<td>Description: </td><td><textarea rows="10" cols="30" name="dDescription" placeholder="Description"
title="Detailed Description"><?php echo $_SESSION['description_query'];
?></textarea></td>
</tr>
<br>
<tr>
<td>
Upload a Picture
<td>
<input type="file" name="pic" placeholder="Choose a pic"/>
</tr>
<br>
<tr>
<td>
Select an Organization
<td>
<input type="checkbox" value="Pune" name="org[]" checked>Pune<input type="checkbox" value="New Delhi" name="org[]" checked>New Delhi<input type="checkbox" value="Bangalore" name="org[]" checked>Bangalore<input type="checkbox" value="Kolkatta" name="org[]" checked>Kolkatta
</tr>
<br>
<tr>
<td><input type="submit" value="Save"></td><td><input type="reset">
<td>Update<input type="radio" name="update_table" value="Update"></tr>
</table>

</form>
<form action="includes/query.php" method="POST">
<h1 align="center">Enter your query here</h1>
<table align="center">
<tr>
<td>Brand: </td><td><input type="text" name="bBrand" required="required" placeholder="Brand" title="Brand Of Product">
</td>
</tr>
<br>
<tr>
<td>Model Number: </td><td><input type="Text" name="Model_Number" required="required" placeholder="Model Number" title="Provide Model Number">
</td>
</tr>
<tr>
<td>
<input type="submit" value="Query">
<td><input type="reset">
</tr>
</table>
</form>
</body>
</html>
<?php
session_destroy();
?>
