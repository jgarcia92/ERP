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
<p>
<?php include('includes/config.php');?>
<form action="final_trans.php" method="POST">
<input type="submit" value="PAYMENT">
</form>
<form action="includes/cust_delete.php" method="POST">
<input type="submit" value="DELETE CART">
</form>
<form action="includes/tracking.php" method="POST">
<input type="submit" value="Track Order">
</form>

<form id="form1" action="cupdate.php">
<input type="submit" value="Update Profile">
</form>
<form id="form1" action="aupdate.php" method="POST">
<input type="submit" value="Update Address">
</form>
<form id="form2" action="includes/delete.php" method="POST">
<input type="submit" value="Delete Account">
</form>
</p>
</div>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
</body>
</html>
