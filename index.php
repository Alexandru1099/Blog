<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | for |everyone </title>
    <link rel="icon" href="./imagini/iconmonstr-newspaper-13.svg">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index.html">


</head>

<body>
    <div class="header">

        <ul>
            <?php
        if(!isset($_SESSION['id'])){
            echo'
            <a class="nav" href="./pagina-signup/pagina.php">
                <h1>Sign Up</h1>
            </a>
            ';
        }
        ?>
            <a class="nav" href="#">
                <h1>Home</h1>
            </a>

        </ul>
    </div>
    <?php
    if(!isset($_SESSION['id'])){
        echo'
        <div class="login">
        <h1>Wellcome!</h1><br>
        <form action="verificare.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Parola"><br>
            <input type="Submit"><br>
        </form>
    </div>
    <div class="changePassword">
        <a href="./pagina-changePassword/update.html"><button>Change Password</button></a>
    </div> ';
    }
    else{
        echo'
        <form action="./pag-writeBlog/blog.html" method="get">
        <button type="submit" style="background-color: black;
    color: white;
    border-radius: 20%;
    padding: 40px;
    cursor: pointer;">Write a blog, click here</button>
    </form>
    <form action="logout.php" method="get">
    <button type="submit" style="background-color: black;
    color: white;
    position:relatoiv;
    float: right;
    border-radius: 20%;
    padding: 40px;
    cursor: pointer;">Log out</button>
</form>';
    }
    ?>
</body>

</html>