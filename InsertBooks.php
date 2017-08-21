<html>
<head>
<title>Insert Book</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

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
if(!isset($_SESSION['username'])) //If user is not logged in then they cannot access this page.
{ //echo 'You are not logged in. <a href="Login.php">Click here</a> to log in.';
header("location:LoginForm.php");
exit();
}
?>
 
<?php
include("DBConnection.php");
 
$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];
 
$query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);

if(mysqli_errno($db) == 1062){
	echo '<center><img src="/images/warning.jpg" Alt="icon" style="width:70px; height:70px;" /></center>';
	echo "<center><h3><b> Duplicate ISBN - Entry not added </b></h3></center>";
}
else{
	echo '<center><img src="/images/okay.jpg" alt="icon" style="width:70px; height:70px;" /></center>';
	echo "<center><h3><b> Book information is inserted successfully </b></h3></center>";
}
?>
 
<br>
<br> 
<center><a href="SearchBooks.php"> To search for the Book information click here </a></center>
<br>
<br>
<center><a href="EnterBooks.php"> To add books click here </a></center> 

</body>
</html>
