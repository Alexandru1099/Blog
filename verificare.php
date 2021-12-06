<?php
session_start();
$connection = new mysqli ('localhost' , 'root' , '' , 'blogDB');


$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['username']) && isset($_POST['password']) && 
!empty($_POST['username']) && !empty($_POST['password'])){
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    $row = $result->fetch_assoc();
    $hash = $row['password'];

    $check = password_verify($password , $hash);
    if ($check != 0){
        header("Location:http://localhost/Blog/index.php?info=gresit");
        die();
    }
    else{
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$hash'";
        $result = mysqli_query($connection, $query);
        if (!$row = $result->fetch_assoc()){
            echo'Parola sau username-ul nu se potrivesc!';
        }
        else{
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
        }
        header("Location:http://localhost/Blog/index.php");
    }
}