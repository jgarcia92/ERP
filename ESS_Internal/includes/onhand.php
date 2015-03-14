<html>
<head>
<title> item onhand quantity </title>
</head>
<body>
<form action="includes/onhand_insert.php" method="POST">
<table align='center' border="2" bgcolor="#efefef">
<tr>
<th width="150">item_id</th>
<th width="150">org_id</th>
<th>material onhand quantity</th>
</tr>
<tr>
<td><select name="item_id">
<?php 
// connect to mongodb
   $m = new MongoClient();
   // select a database\
   $db = $m->db_ess;
   $collection = $db->ess_item_info;
   $cursor=$collection->find();
   foreach($cursor as $document)
{
echo'<option value="'.$document["_id"].'">'. $document["_id"].'</option>';
}  
?>
</td>
</td><td><select name="org_id">
<?php 
// connect to mongodb
   $m = new MongoClient();
   // select a database\
   $db = $m->db_ess;
   $collection = $db->ess_organization;
   $cursor=$collection->find();
   foreach($cursor as $document)
{
echo'<option value="'.$document["_id"].'">'. $document["_id"].'</option>';
echo '<td><input type='text' name="moq" value="'.$document['onhand'].'"></td>';
}  
?>
</tr>
</table>
<td><input  type="button" align='center' value="save"></td></br>
<td><input  type="reset" align='center' value="clear"></td>
</form>
</body>
</html>
