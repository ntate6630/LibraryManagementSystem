<html>
<head>
<title>LoginForm.php</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Javascript validation for user inputs -->
<script type="text/javascript">
function validate()
{
var a = document.login.username.value;
if(a=="") 
{
alert("Please enter your username");
document.login.username.focus();
return false;
}
var b = document.forms["login"]["password"].value;
if (b == "") 
{
alert("Please enter your password");
return false;
}
}
</script>
</head>
<body>
<!-- Make a note that the method type used is post, action page is Login.php and validate() function will get called on submit -->
<br><br><br><br><br><br><br><br>
<form name="login" method="post" action="Login.php" onsubmit="return validate();" >
<table border="0" width="355" align="center" bgcolor="a6a6a6" >
<tr>
<td height="40" bgcolor="#ffcc00">
<center><b>Login</b></center>
</td>
</tr>
<tr>
<td width="219">
<table width="240" height="100" align="center">
<tr></tr>
<tr>
<td height="50" width="71">Username:</td>
<td width="139"><input type="text" autofocus name="username" minlength="4" required="required" placeholder="Your username"></td>
</tr>
<tr>
<td width="71">Password:</td>
<td width="139"><input type="password" name="password" minlength="4" required="required" placeholder="Your Password"></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td width="71">&nbsp;</td>
<td width="139" height="50">
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td width="219" bgcolor="#a6a6a6"  align="center">
</td>
</tr>
</table>
</form>
</body>
</html>
