<html>
<head>
<title>Enter books</title>
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

<!--Once the form is submitted the details are forwared to InsertBooks.php -->
<form action="InsertBooks.php" method="post">
 
<table height="40" width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#a6a6a6">
<tr> 
<td height="40" bgcolor="#ffccoo"><center><b>Add books to database</b></center></td>
</tr>
</table>
<table border="0" width="600" height="400" align="center" bgcolor="#a6a6a6">
<tr>
<td height="70">&nbsp;Enter ISBN :</td>
<td> <input type="text" name="isbn" required="required" placeholder="ISBN" autofocus name="isbn" size="48"></td>
</tr>
<tr>
<td>&nbsp;Enter Title :</td>
<td> <input type="text" name="title" required="required" placeholder="Book title" size="48"></td>
</tr>
<tr>
<td>&nbsp;Enter Author :</td>
<td> <input type="text" name="author" size="48"></td>
</tr>
<tr>
<td>&nbsp;Enter Edition :</td>
<td> <input type="text" name="edition" size="48"></td>
</tr>
<tr>
<td>&nbsp;Enter Publication:</td>
<td> <input type="text" name="publication" size="48"></td>
</tr>
<tr>
<td></td>
<td height="100">
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>

<?php
if(!isset($_SESSION['username'])) //If user is not logged in then he cannot access this page
{ //echo 'You  are not logged in. <a href="login.php">click here</a> to log in';
header("location:LoginForm.php");
}
?>
</body>
</html>
