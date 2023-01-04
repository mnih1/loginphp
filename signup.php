<?php

    session_start();

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

    <!-- Tu kod php który będzie logował -->
    
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
        <form action="includes/singup.inc.php" method="post" data-aos="flip-right" class="register-form">
            <h1>Zarejestruj się</h1>
            <label for="user-name">
                Nazwa użytkownika:
                <input 
                    type="text" 
                    name="user_name" 
                    id="user-name"
                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == "emptyInput" || $_GET["error"] == "invalidUname" || $_GET["error"] == "userExists"){
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
                        if ($_GET["error"] == "invalidUname"){
                            echo "<p class='error-name'>Zła nazwa użytkownika!</p>";
                        }
                        if ($_GET["error"] == "userExists"){
                            echo "<p class='error-name'>Nazwa zajęta!</p>";
                        }
                    }
                ?>

            </label>
            <label for="email">
                Email:
                <input 
                    type="email" 
                    name="mail" 
                    id="email" 
                    placeholder="przykładowy.email@email.com"

                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == "emptyInput" || $_GET["error"] == "invalidEmail" || $_GET["error"] == "emailExists"){
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
                        if ($_GET["error"] == "invalidEmail"){
                            echo "<p class='error-name'>Błędny email!</p>";
                        }
                        if ($_GET["error"] == "emialExists"){
                            echo "<p class='error-name'>Ten email już został zarejestrowany!</p>";
                        }
                    }
                ?>

            </label>
            <label for="password1">
                Hasło:
                <input 
                type="password" 
                    name="pass" 
                    id="password1"

                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == "emptyInput" || $_GET["error"] == "passwordMatch"){
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
                        if ($_GET["error"] == "passwordMatch"){
                            echo "<p class='error-name'>Hasła do siebie nie pasują!</p>";
                        }
                    }
                ?>

            </label>
            <label for="password2">
                Powtórz hasło:
                <input 
                    type="password" 
                    name="passRepeat" 
                    id="password2"

                    <?php
                        if (isset($_GET["error"])){
                            if ($_GET["error"] == "emptyInput" || $_GET["error"] == "passwordMatch"){
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
                        if ($_GET["error"] == "passwordMatch"){
                            echo "<p class='error-name'>Hasła do siebie nie pasują!</p>";
                        }
                    }
                ?>

            </label>
            <div class="submit-box">
                <input type="submit" name="signup" class="btn-submit" value="Zarejestruj się">
                <hr>

                <?php
                    if (isset($_GET["error"])){
                        if ($_GET["error"] == "none"){
                            echo "<p class='singup-done'>Zostałeś zarejestrowany!</p>";
                        }
                        if ($_GET["error"] == "stmtfailed"){
                            echo "<p class='singup-done'>Coś poszło nie tak! Spróbuj później </p>";
                        }
                    }
                ?>

            </div>

            
            <a href="signin.php">Mam już konto.</a>

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