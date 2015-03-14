<?php
session_start();
if(!isset($_SESSION['type']))
{
header("location:index.php");
}
?><html>
<title>Supplier Transaction</title>
<body>
<h2 align="center">Supplier Transaction</h2>
<form action='includes/signup_insert.php' method='post'>
<table align="center">
<br>
<br>
<td>Purchase Order Number: </td><td><input type="text" name="purchase_order_num" required="required" placeholder="Order Number" title="Price List">
</td>
</tr>
<tr>
<td>Supplier Id: </td><td><input type="text" name="supplier_id" required="required" placeholder="supplier Id" title="Provide supplier Id"></td>
<br>
<tr>
<tr>
<td>Ship From Address: </td><td><input type="text" name="ship_address" required="required" placeholder="supplier address" title="Provide supplier address
"></td>
<br>
<tr>
<td>Bill to Address:</td><td><input type="text" name="bill_add"  placeholder="Bill to address" title="Provide billing address"></td>
</tr>
<br>
<tr>
<td>Receive to Adress:</td><td><input type="text" name="receiving_add"  placeholder="Text" title="Provide receiving address"></td>
</tr>
<tr>
<td>Receiving Date:</td><td><input type="date" name="receiving_date"  placeholder="Text" title="Provide receiving Date"></td>
</tr>
<tr>
<td>Order Status:</td><td><input type="radio" name="order_status">Confirmed<input type="radio" name="order_status">Received</td>
</tr>
</table>
<hr>
<hr>
<table border='2' align="center">
<tr>
<th>Order No</th>
<th>Item Id</th>
<th>Price list Id</th>
<th>Quantity</th>
<th>Unit Selling Price</th>
<th>Serial number</th>
<th>Receiving Date</th>
<th>Drop ship line</th>
</tr>
<tr>
<td>
<input type="text" placeholder="Order No" name="order_num">
</td>
<td> <input type="text" placeholder="Item Id" name="item_id">
</td>
<td><input type="text" placeholder="Price list id" name="price_list_id"></td>
<td><input type="text" placeholder="Quantity" name="quantity"></td>
<td><input type="text" placeholder="Unit Selling Price" name="usp"></td>
<td><input type="text" placeholder="Serial number" name="serial_number"></td>
<td><input type="date" placeholder="Receiving Date" name="receiving_date2"></td>
<td><input type="radio" name="click" value="yes">yes <input type="radio" name="click" value="no">no 
</td>
</tr>
</table>
<tr>
<td><br><input type="submit"></td><td><input type="reset"></td>
</tr>
</form>
</body>
</html>
