<?php
$username = $_POST ['username'];
$password = $_POST['password'];
$connection = new mysqli ('localhost' , 'root' , '' , 'blogDB');
$query = "UPDATE users SET password = $password WHERE username = '$username'";
$connection->query($query);
header ("Location:http://localhost/Blog/");

?>