<html>
<head>
<title>Insert user</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body bgcolor="#ffffff">

<?php
session_start();
$username = $_SESSION['username']; //retrieve the session variable
?>

<nav>
	<ul>
		<li><a href="Add_user.php">Add User</a></li>
		<li><a href="SearchUsers.php">Search Users</a></li>
		<li><a href="EnterBooks.php">Add Book</a></li>
		<li><a href="SearchBooks.php">Search Books</a></li>
		<li><a href="BorrowBook.php">Borrow Book</a></li>
		<li><a href="ReturnBook.php">Return Book</a></li>
		<li><a href="DisplayBorrowed.php">Borrowed</a></li> 
		<li><a href="DeleteUser.php">Delete User</a></li>
		<li><a href="UpdateUser.php">Update User</a></li>
		<li><a href="DeleteBook.php">Delete Book</a></li>
		<Li><a href="UpdateBook.php">Update Book</a></li>		
		<li><a href="Logout.php">Logout</a></li> <!-- Call the Logout page to destroy the session -->
	</ul>
</nav>
<b>Logged in as: <?php echo $username ?></b>
<br><br><br><br><br><br><br><br>

<?php
if(!isset($_SESSION['username'])) //If the user is not logged in they cannot access this page.
{ //echo 'You are not logged in. <a href="Login.php">Click here</a> to log in.';
header("location:LoginForm.php");
exit();
}
?>

<?php
include("DBConnection.php");
 
$full_name=$_POST["full_name"];
$student_number=$_POST["student_number"];

$query = "insert into users_info(full_name,student_number) values('$full_name','$student_number')"; //Insert query to add users details into the users_info table
$result = mysqli_query($db,$query);

if(mysqli_errno($db) == 1062){
	echo '<center><img src="/images/warning.jpg" alt="icon" style="width:70px; height:70px;" /></center>'; 
	echo "<center><h3><b> Duplicate Student number - Entry not added </b></h3></center>";
}
else{
	echo '<center><img src="/images/okay.jpg" alt="icon" style="width:70px; height:70px;" /></center>';
	echo "<center><h3><b> User information inserted successfully </b></h3></center>";
}
?>
<br>
<br>
<center><a href="SearchUsers.php"> To search for users information click here </a></center>
<br>
<br>
<center><a href="Add_user.php"> To add another User click here </a></center> 
</body>
</html>

