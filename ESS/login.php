<?php
SESSION_START();
if(isset($_SESSION['user']))
{
echo"<h1 align=center>You're already logged in </h1>";
echo '<h1 align=center>'.$_SESSION['user'].'</h1>';
}
else
{
?>
<html>
<head>
<title> Login</title>
<link rel="stylesheet" type="text/css" href="css/styles3.css">
</head>
<body>

<h1>Login</h1>
<h2 align="center">Don't have an account, signup <a href="csignup.php">here</a></h2>
<div id='login'>
            <form action='includes/ltest.php' method='post'>
               <br/> <br/><br/>
                <input class='login-text' type='text' name='username' value='Username' onFocus="if(this.value == 'Username') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Username';}">
                <input class='login-text' type='password' name='password' value='Password' onFocus="if(this.value == 'Password') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Password';}">
                <input class='login-button' type='submit' name='login' value='Login'>
</form>
</div> 
</body>
</html>
<?php
}
?>

