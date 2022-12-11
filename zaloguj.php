<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./assets/css/sass/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <title>Zaoguj do Something</title>
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
        <form action="">
            <h1>Zaloguj</h1>
            <label for="input-login">
                Login:
                <input type="text" placeholder="przykladowymail@gmail.com" id="input-login">
            </label>
            <label for="input-haslo">
                Hasło:
                <input type="password" placeholder="Hasło" id="input-haslo">
            </label>
            <!-- TODO: Input logowanie itd + wysylizowanie -->
            <h6>Niepamiętam hasła</h6>
        </form>
    </div>

<script>
    AOS.init();
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>