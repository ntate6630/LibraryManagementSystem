<html>
<head>
<title>Search Books</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<body bgcolor="#ffffff">

<form action = "DisplayBooks.php" method="get">

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

<table border="0" width="600" align="center" bgcolor="#a6a6a6">
<tr>
<td height="40" bgcolor="#ffcc00">
<center><b>Search Books</b></center>
</td>
</tr>
<table height ="100" width="600" align="center" bgcolor="a6a6a6">
<tr>
<td>&nbsp&nbsp;Enter book title to &nbsp&nbsp;search :</td>
<td height="100"><input type="text" autofocus name="search" size="48"></td>
</tr>
<tr>
<td></td>
<td height="100"><input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</center>
</table>
<br>
</form>

<?php
if(!isset($_SESSION['username'])) //If user is not logged in then he cannot access this page.
{ //echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
header("location:LoginForm.php");
}
?>

</body>
</html>
