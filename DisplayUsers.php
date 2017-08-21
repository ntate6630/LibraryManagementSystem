<html>
<head>
<title>Display Users</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
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
<br><br>

<?php
include("DBConnection.php");
 
$search = $_REQUEST["search"];
 
$query = "select full_name, student_number from users_info where full_name like '%$search%' OR student_number like '%$search%'"; //search with a student_name OR student_number in the table users_info
$result = mysqli_query($db,$query);
 
if(mysqli_num_rows($result)>0)
{ 
?>
 
<table width="1000" border="1" align="center" cellpadding="5" cellspacing="0" bgcolor="#ffffff"> 
	<tr>
		<th><b> Full Name </b></th>
		<th><b> Student Number </b></th>
	</tr>
 
<?php while($row = mysqli_fetch_assoc($result))
{
?>
	<tr>
		<td><?php echo $row["full_name"];?> </td>
		<td><?php echo $row["student_number"];?> </td>
	</tr>
<?php
}
}
else
{
	echo "<br><br><br><br><br><br><br><br><center><h3><b>No users found in the Records by the name - $search </b></h3></center>" ;
	echo '<a href="SearchUsers.php"><br><br><h3><b><center>Click here to Search Users</center></b></h3></a>';
}
?>
</table>

<?php
if(!isset($_SESSION['username'])) //If user is not logged in then they cannot access this page.
{ //echo 'You are not logged in. <a href="Login.php">Click here</a> to log in.';
	header("location:LoginForm.php");
}
?>

</body>
</html>
