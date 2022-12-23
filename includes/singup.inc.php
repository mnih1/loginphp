<?php
    

    if(isset($_POST["signup"])){
        $username = $_POST["user_name"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
        $passReapet = $_POST["passReapet"];

        require_once("includes/config.php");
        include_once("incudes/functions.php");

        if(checkInput($username, $mail, $pass, $passReapet) !== false ){
            header("location: ../signup.php?error=emptyInput");
            exit();
        }
        if(invalidEmail($mail) !== false){
            header("location: ../signup.php?error=invalidEmail");
            exit();
        }
        if(passMatch($pass, $passReapet) !== false){
            header("location: ../signup.php?error=passwordsMatch")
        }
        if(userExists($conn, $username, $mail) !== false){
            header("location: ../signup.php?error=userExists");
            exit();
        }

        $createUser($conn, $username, $mail, $pass);
    }
    else{
        header("location: ../signup.php");
    }