<?php
SESSION_START();
if(!isset($_SESSION['user']))
header("location:login.php");
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<script src="scripts/window.js"></script>
<?php include('includes/header.php')?>
<?php
if(isset($_SESSION['user']))
{?>
<form id="form2" action="logout.php">
<input type="submit" value="Logout"/>
</form>
<form id="form1" action="profile.php">
<input type="submit" value="Profile"/>
</form>
<?php
}
else
{?>
<form name="form2" id="form2" method="post" onsubmit="openWindow(500, 500,'signup.html');">
<input type="submit" value="Sign Up"/>
</input>
</form>
<form id="form1" action="login.php">
<input type="submit" value="Login">
</input>
</form>
<?php
}?>
<?php include('includes/navigation.php')?>
<div id="content">
<div id="content_cen">
<div id="content_sup">
<div id="left">
<?php
session_start();
$m = new MongoClient();
$db=$m->db_ess;
$collection=$db->ess_temp_trans;
$collection2=$db->ess_item_info;
$cursor=$collection->find();
if(!isset($_SESSION['total']))
{
$total=0;
}
else
{
$total=$_SESSION['total'];
}

/*foreach($cursor2 as $document2)
{echo 'Following Items are present in the cart';
echo $document2['model'].'<hr>';
echo $document2['brand']'<br>';
}*/

foreach($cursor as $document)
{
//echo $document['item_id'];
$cursor2=$collection2->find(array('_id'=>new MongoId($document['item_id'])));
echo 'The following item has been purchased<br>';
foreach($cursor2 as $document2)
{
echo $document2['cat'].'<br>';
echo $document2['brand'].'<br>';
}
$total+=$document['price'];
}
echo 'Total Amount Payable: &#8377;'.$total;
if($total==0)
{
echo '<h1 align="center">Your Cart is Empty, Go <a href="profile.php">back</a> and buy something cool</h1>';
exit();
}
?>
<form action="order_slip.php" method="post">
<h2 align="center">Select your payment method</h2>
<input type="radio" name="payment" value="COD" required="required">Cash On Delivery
<input type="radio" name="payment" value="CD" required="required">Credit/Debit
<input type="submit" value="Confirm your order">
</form>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
</body>
</html>

