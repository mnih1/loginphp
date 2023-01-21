<?php

    require_once("includes/config.php");

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/css/main.css?v=<?php echo time(); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <title>Zaloguj do Something</title>
</head>
<body>
    
    <nav>
        <div class="logo">
            <a href="./index.php">Something</a>
        </div>
        <div class="menu">
            <div class="row">
                <a href="">Aktualności</a>
            </div>
            <div class="row">
                <a href="">Oferta</a>
            </div>
            <div class="row">
                <a href="">Kontakt</a>
            </div>
            <div class="row">
                <a href="./signin.php">Zaloguj</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <form action="includes/login.inc.php" method="post" data-aos="flip-right">
            <h1>Zaloguj</h1>
            <label for="input-login">
                Email:
                <input 
                type="email" 
                name="mail" 
                placeholder="przykladowymail@gmail.com" 
                id="input-login"
                <?php
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "emptyInput" || $_GET["error"] == "wronglogin"){
                            echo "class='fail'";
                        }
                    }
                ?>
                >

                <?php
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "emptyInput"){
                            echo "<p class='error-name'>Pole nie może być puste!</p>";
                        }
                    }
                ?>
            </label>
            <label for="input-haslo">
                Hasło:
                <input 
                type="password" 
                name="pass" 
                placeholder="Hasło" 
                id="input-haslo"
                <?php
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "emptyInput" || $_GET["error"] == "wronglogin"){
                            echo "class='fail'";
                        }
                    }
                ?>
                >

                <?php
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "emptyInput"){
                            echo "<p class='error-name'>Pole nie może być puste!</p>";
                        }
                        if ($_GET["error"] == "wronglogin"){
                            echo "<p class='error-name'>Email lub hasło jest niepoprawne!</p>";
                        }
                    }
                ?>
            </label>
            <div class="submit-box">
                <input type="submit" name="submit" class="btn-submit" value="Zaloguj">
                <hr>
            </div>
            
            <a href="forgetPassword.php">Nie pamiętam hasła</a>
            <a href="signup.php">Zarejestruj się</a>
        </form>
    </div>
    
    <footer>
        <div class="main">
            <div class="box">
                <a href="./index.php">Something</a>
                <a href="">Aktualności</a>
                <a href="">Oferta</a>
                <a href="">Kontakt</a>
                <a href="">{Zaloguj}</a>
            </div>
            <div class="box">

            </div>
            <div class="box">

            </div>
            <div class="box">

            </div>
        </div>
        <div class="copyright">
            2022 &copy; MNIH
        </div>
    </footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>