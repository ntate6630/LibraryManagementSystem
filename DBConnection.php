<?php 
//Establishing connection with the database 
define('DB_SERVER', '127.0.0.1:3306'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', 'u7acmf51esh'); 
define('DB_DATABASE', 'books'); //where customers is the database 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
?>
