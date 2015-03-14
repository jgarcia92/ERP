
<html>
<head>
<title>Receiving form</title>
<script type="text/javascript">
    function updateTextInput(val) {
      document.getElementById('textInput').value=val; 
    }

  </script>
</head>
<body>
<h1 align="center">Receiving Form</h1>
<hr>
<?php session_start();
if($_SESSION['error']==1)
{
echo '<h2 align="center">Fatal Error Name Already Exists</h2>';
}
session_destroy();
?>
<form action="includes/receiving_insert.php" method='post'>
<table border="5" align="center">
  <tr>
    <th>Purchase Order Number</th>
    <th>Brand</th>
<th>Category</th>
<th>Item Model Number</th>
    <th>Quantity</th>
     </tr>
  <tr>
    <td> <input type="text" name="purchase_order_no" required="required"> </td>
    <td> <input type="text" name="brand" required="required"> </td>
    <td> <input type="text" name="model" required="required"> </td>
     <td> <input type="text" name="cat" required="required"> </td>
     <td> <input type="text" name="quantity" required="required"> </td>
</tr>
<tr>
<td><input type="submit" value="Submit"><td><input type="reset" value="reset">
  </tr>
</table>
</form>
</body>
</html>

