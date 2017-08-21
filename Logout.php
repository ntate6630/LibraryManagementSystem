<?php 
include("DBConnection.php");
session_start();
$username = $_SESSION['username']; //retrieve the session variable

//Optional code - to set the logged in user's status to zero
$query = "UPDATE profile SET loggedin=0 WHERE username='$username'"; // to maintain Logged-in Status
$result = mysqli_query($db,$query);
mysqli_close($db);

unset($_SESSION['username']); //to remove session variable
session_destroy(); //destroy the session
header("location: LoginForm.php"); //to redirect back to "Login.php" after logging out
exit();

if(!isset($_SESSION['username'])) //If user is not logged in then he cannot access the profile page
{
//echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
header("location:LoginForm.php");
}
?>

