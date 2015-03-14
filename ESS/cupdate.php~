<?php
SESSION_START();
if(!isset($_SESSION['user']))
header("location:login.php");
?>
<html>
<head>
<script>
function isAlpha(elem,msg){
var alphaexp = /^[A-z]+$/;/// '^(?=.[A-Za-z0-9])[\S]$';
if(elem.value.match(alphaexp)){
return true;
}else{
alert(msg);
return false;
}
}
</script>
</head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="css/styles2.css">
<body>
<h1 align="center">Enter the details that sought to be updated</h1>
<form action='includes/update.php' method='post'>
<table align="center">
<tr>
<td>
First Name: </td><td><input type="text" required="required" id="FirstName" name="fname" min="2" max="20" placeholder="First Name" title="Your First Name">
</td>
</tr>
<br>
<tr>
<td>Last Name: </td><td><input type="text" name="lname" id="LastName" required="required" placeholder="Last Name"  min="2" max="20" title="Your Last Name">
</td>
</tr>
<tr>
<td>Mobile No: </td><td><input type="tel" name="mnumber" id="Phone" required="required" placeholder="Mobile No." pattern="[0-9]{10,}" maxlength="10" title="Give your mobile number">
<br>
<tr>
<td>STD Number: </td><td><input type="tel" name="stdnumber" maxlength="3" placeholder="STD Code" title="STD Number" id="std">
</tr>
<tr>
<td>Telephone No: </td><td><input type="tel" name="tnumber" maxlength="8" placeholder="Telephone No." title="Give your landline number">
</tr>
<td>User Name: </td><td><input type="text" name="uname" id="user" required="required" placeholder="User Name" min="3" max="20" pattern="[a-z0-9_-]{3,20}" title="Provide an User Name"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password" required="required" min="3" max="20" placeholder="**********" title="Provide a password"></td>
</tr>
<tr>
<td>E-mail: </td><td><input type="email" name="email" required="required" placeholder="example@example.com" title="Provide your E-mail">
</td>
</tr>
<tr>
<td><input type="submit" value="Submit" onclick="return (isAlpha(document.getElementById('FirstName'),'First Name must contain letters only and must be atleat 2 characters')&isAlpha(document.getElementById('LastName'),'Last Name must contain letters only and must be atleat 2 characters'))==1"></td><td><input type="reset">
</tr>
</table>
</form>
</body>
</html>
