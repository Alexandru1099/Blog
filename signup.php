<?php
$connection = new mysqli('localhost', 'root', '', 'blogDB');

if (!empty ($_POST['username']) && !empty($_POST['password']) && 
!empty($_POST['email']) && !empty($_POST['first_name']) && !empty($_POST['last_name'])
&& isset($_POST['username']) && isset($_POST['password']) && 
isset($_POST['email']) && isset($_POST['first_name']) && isset($_POST['last_name'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $query = "SELECT username FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);
    $check = mysqli_num_rows ($result);

    if ($check > 0 ){
        header("Location:http://localhost/Blog/pagina-signup/pagina.php?info=exista");
        die();
    }
else{
    $query = "INSERT INTO users (`username`, `password`, `email`, `first_name`, `last_name`) 
    Values ('$username' , '$password' , '$email' , '$first_name' , '$last_name' )";
    
    $connection->query($query);
    
    header ("Location:http://localhost/Blog/pagina-signup/pagina.php?info=ok");  
    } 
}
else{
 header ("Location:http://localhost/Blog/pagina-signup/pagina.php?info=eroare");   
}
?>

