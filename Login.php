<html>
<body>
<?php
include("DBConnection.php");
session_start(); //It is advised to open a session in the beginning

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
//echo 'Server request method POST';   
if (empty($_POST['username']) || empty($_POST['password'])) //This is the way to validate inputs using PHP code but here we are using javascript validations so it is not necessary 
{
echo "Please enter the correct Username and Password";
//header("location: LoginForm.php");//You will be sent to Login.php for re-login
}
 
$usernameLogn = $_POST["username"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
$passwordLogin = $_POST["password"];

$myusername = stripslashes($usernameLogn); // stripslashes() is used to clean up data retrieved from an HTML form
$mypassword = stripslashes($passwordLogin);

$myusername = mysqli_real_escape_string($db,$_POST['username']); // Escapes special characters in a string for use in an SQL statement
$mypassword = mysqli_real_escape_string($db,$_POST['password']);
 
$query = "SELECT * FROM profile WHERE username = '$myusername' and password = '$mypassword'"; //Fetching all the records with input credentials
$result = mysqli_query($db,$query);
$count = mysqli_num_rows($result);
mysqli_close($db);
if($count == 1)
{
$_SESSION['username']=$myusername; //Storing the username value in session variable so that it can be retrieved on other pages
 
header("location: SearchUsers.php"); // user will be taken to Search Users page
}
else
{
echo '<br><br><br><br><br><br><br><br><center><img src="/images/warning.jpg" alt="icon" style="width:70px; height:70px;" /></center>';
echo "<br><h3><b><center>Incorrect username or password<center></b></h3>"; 
?>
<br><br><center><a href="LoginForm.php">Try Login</a><center>
<?php 
} 
}
?>
</body> 
</html>
