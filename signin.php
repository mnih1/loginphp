<?php
    session_start();

    require_once("includes/config.php");

    $db_host = "";
    $db_user = "";
    $db_pass = "";
    $db_name = "";

    databaseLogin();

    $conn = @new mysqli($db_host, $db_user, $db_pass, $db_name);
    if($conn->connect_errno !=0){
        echo "Błąd połączenia: " . $conn->connect_error;
    }

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
                <a href="./zaloguj.php">Zaloguj</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <form action="" data-aos="flip-right">
            <h1>Zaloguj</h1>
            <label for="input-login">
                Login:
                <input type="text" placeholder="przykladowymail@gmail.com" id="input-login">
            </label>
            <label for="input-haslo">
                Hasło:
                <input type="password" placeholder="Hasło" id="input-haslo">
            </label>
            <div class="submit-box">
                <input type="submit" class="btn-submit" value="Zaloguj">
                <hr>
            </div>
            
            <a href="">Nie pamiętam hasła</a>
            <a href="rejestracja.php">Zarejestruj się</a>
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