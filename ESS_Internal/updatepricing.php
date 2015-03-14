
<html>
<head>
<script>
function test() {
    var x=document.getElementById("catname");
}
</script>
</head>
<title>Pricing</title>
<body>
<h2 align="center">Insert Pricing</h2>
<form action='includes/pricinginsert.php' method='post'>
<table align="center">
<br>
<br>
<td>Price List Name: </td><td><input type="Text" name="plist" required="required" placeholder="Price List" title="Price List">
</td>
</tr>

<br>

</table>
<hr>
<hr>
<table border='2' align="center">
<tr>

<th>Category</th>
<th>Brand</th>
<th>Model Number</th>
<th>Unit Of Measurement</th>
<th>Price</th>
<th>Discount</th>
<th>Hot Buy Flag</th>
</tr>
<tr>
<td><input type="text" name="category" value="<?php echo$_GET['cat'];?>">
<td> <input type="text" name="catname" value="<?php echo$_GET['brand'];?>"> 
<td> <input type="text" name="model_num" id="model_num" value="<?php echo$_GET['model'];?>">
</td>
<td><input type="text" name="UOM" value="each"></td>
<td><input type="text" name="price" required="required" placeholder="Price" title="Enter the price in Rupees"></td>
<td><input type="text" name="discount" required="required" placeholder="Discount" title="Provide Discount in %"></td>
<td><input type="radio" name="hbf" value="Yes">Yes
<input type="radio" name="hbf" value="No">No</td>
</tr>
<tr>
<td><br><input type="submit"></td><td><input type="reset"></td>
</tr>
</table>


</form>
</body>
</html>
