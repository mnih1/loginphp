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
                <input type="text" name="user_name" id="user-name">
            </label>
            <label for="email">
                Email:
                <input type="email" name="mail" id="email" placeholder="przykładowy.email@email.com">
            </label>
            <label for="password1">
                Hasło:
                <input type="password" name="pass" id="password1">
            </label>
            <label for="password2">
                Powtórz hasło:
                <input type="password" name="passRepeat" id="password2">
            </label>
            <!-- <label for="accept">
                <input type="checkbox" name="" id="accept" require> Zezwolenie na przetworzenie danych.
            </label> -->
            <div class="submit-box">
                <input type="submit" name="signup" class="btn-submit" value="Zarejestruj się">
                <hr>
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