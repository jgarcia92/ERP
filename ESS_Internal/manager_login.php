<?php
session_start();
if(!isset($_SESSION['type']))
{
header("location:index.php");
}
?>
<html>
<title>MANAGER INTERNAL FORM</title>
<body>
<h2 align="center">MANAGER INTERNAL FORM</h2>
  <table align=center>
    <tr>
    <td><input type="button" value="Recruit" onclick="window.location.href='manager.php'"> </td>
    <td><input type="button" value="Fire" onclick="window.location.href='includes/fire.php'"> </td>
    </tr>
<tr>
<form action="includes/logout.php">
<td><input type="submit" value="Log Out">  
</form>
</td>
<table>
</body>
</html>
