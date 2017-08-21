<html>
<head>
<title>Help</title>
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
		<li><a href="Help.php">Help</a></li>
		<li><a href="About.php">About</a></li>
		<li><a href="Logout.php">Logout</a></li> <!-- Call the Logout page to destroy the session -->
	</ul>
</nav>
<b>Logged in as: <?php echo $username ?></b>
<br><br><br><br><br><br><br><br>
<table border="0" width="600" align="center" cellpadding="5" cellspacing="1"bgcolor="#a6a6a6">
<tr>
	<td height="50" bgcolor="#ffcc00">
		<center><b><span style="font-size:20pt;">About this application</span></b></center>
	</td>
</tr>
<table border="0" width="600" height="100" align="center" bgcolor="a6a6a6">
<tr>
	<td height="50"><center><span style="font-size:16pt;"><br>Library Management System<br><br>
	version 1.0<br><br>
	&copy;Nicholas Tate 2017<br><br></span></center></td>
</tr>
</table>


<?php
if(!isset($_SESSION['username'])) //If user is not logged in then they cannot access the profile page
{ //echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
header("location:LoginForm.php");
}
?>

</body>
</html>

