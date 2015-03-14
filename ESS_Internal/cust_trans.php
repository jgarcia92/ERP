<?php
session_start();
if(!isset($_SESSION['type']))
{
header("location:index.php");
}
else if($_SESSION['type']!='WManager')
{
echo '<h1 align="center">You are not authorized to this page go <a href="index.php">back</a></h1>';
}
?>
<html>
<title>Customer Transaction</title>
<body>
<h2 align="center">Customer Transaction</h2>
<form action='includes/pricinginsert.php' method='post'>
<table align="center">
<br>
<br>
<td>Order Number: </td><td><select name="order_num" required="required" placeholder="Order Number" title="Price List">
<?php
$m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_temp_trans;
   $cursor=$collection->find();
foreach($cursor as $document)
{
echo '<option value="'.$document['order_id'].'">'.$document['order_id'].'</option>';
}
?>
</select>
</td>
</tr>
<tr>
<td>Order Date: </td><td><input type="date" name="order_date"  placeholder="Order Date" title="Provide Order Date">
</td>
</tr>
<tr>
<td>Customer Id: </td><td><input type="text" name="cust_id" required="required" placeholder="Customer Id" title="Provide Customer Id" value="<?php  ?>"></td>
<br>
<tr>
<td>Order Type:</td><td><input type="radio" name="ord_type">Regular<input type="radio" name="ord_type">Drop Ship</td>
<br>
</tr>
<tr>
<td>Bill to Address Id:</td><td><input type="text" name="bill_add"  placeholder="Bill to address" title="Provide billing address" value="";></td>
</tr>
<br>
<tr>
<td>Ship to Adress Id:</td><td><input type="text" name="ship_add"  placeholder="Text" title="Provide Card Type"></td>
</tr>
<tr>
<td>Order Status:</td><td><input type="text" value="confirmed"></td>
</tr>
</table>
<hr>
<hr>
<table border='2' align="center">
<?php
$m = new MongoClient();
   // select a database
   $db = $m->db_ess;
   $collection = $db->ess_temp_trans;
   $cursor=$collection->find();
foreach($cursor as $document)
{
echo '
<tr>
<th>Order No</th>
<th>Item Id</th>
<th>Quantity</th>
<th>Line Amount</th>
</tr>
<tr><td><input type="text" name="order_num" required="required" placeholder="Order Number" title="Price List"
value="'.$document['order_id'].'">
</select>
</td>
<td><input type="text" name="order_num" required="required" placeholder="Order Number" title="Price List"
value="'.$document['item_id'].'">
</td>
<td><input type="text" placeholder="Quantity" value="1"></td>
<td><input type="text" placeholder="Final amount" value="'.$document['price'].'"></td>
</tr>
';
$prev=$document['item_id'];
}
?>
</table>
<tr>
<td><br><input type="submit" onclick="window.location.href=''">></td><td><input type="reset"></td>
</tr>
</form>
</body>
</html>
