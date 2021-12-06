
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | for |everyone </title>
    <link rel="icon" href="./imagini/iconmonstr-newspaper-13.svg">
    <link rel="stylesheet" href="signup.php">
    <link rel="stylesheet" href="pag.css">
    
</head>

<body>
    <header>
        <section class="Logo"></section>
        <nav>
            <h1>Login</h1>
        </nav>
    </header>
    <div class="container">
        <section class="form-section">
            <form method="post" action="signup.php">
                <input type="text" name="username" placeholder="username"><br>
                <input type="password" name="password" placeholder="password"><br>
                <input type="text" name="email" placeholder="email"><br>
                <input type="text" name="first_name" placeholder="First Name "> <br>
                <input type="text" name="last_name" placeholder="Last Name"><br>
                <input type="Submit"><br><br>
            </form>
            <?php 
                if (isset($_GET['info']) && $_GET['info'] == 'ok'){
                    echo '<p style = "text-align: center; color:green;"> Contul tau a fost creat cu succes</p>';
                }
                elseif(isset($_GET['info']) && $_GET['info'] == 'eroare'){
                    echo '<p style = "text-align: center; color:red;"> Completati toate chenarele!</p>';
                }
                elseif(isset($_GET['info']) && $_GET['info'] == 'exista'){
                    echo '<p style = "text-align: center; color:red;"> Username-ul exista deja!</p>';
                }
            ?>
            </section>
    </div>
</body>

</html>