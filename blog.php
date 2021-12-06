<?php
$connection = new mysqli('localhost', 'root', '', 'blogDB');

$title = $_GET['title'];
$descriptionShort = $_GET['shortDescription'];
$descriptionLong = $_GET['longDescription'];

$query = "INSERT INTO posts (`title` , `description_short` , `description_long`)
VALUES ('$title' , '$descriptionShort' , '$descriptionLong')";

$connection->query($query);
header("Location:../index.php");
?>