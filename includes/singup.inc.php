<?php

    require_once("config.php");
    

    if(isset($_POST["signup"])){
        $username = $_POST["user_name"];
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];
        $passRepeat = $_POST["passRepeat"];

        require_once("config.php");
        require_once("functions.php");

        if(checkInput($username, $mail, $pass, $passRepeat) !== false ){
            header("location: ../signup.php?error=emptyInput");
            exit();
        }
        if (invalidUname($username) !== false){
            header("location: ../signup.php?error=invalidUname");
            exit();
        }
        if(invalidEmail($mail) !== false){
            header("location: ../signup.php?error=invalidEmail");
            exit();
        }
        if(passMatch($pass, $passRepeat) !== false){
            header("location: ../signup.php?error=passwordMatch");
            exit();
        }
        if(userExists($conn, $username) !== false){
            header("location: ../signup.php?error=userExists");
            exit();
        }
        if(emialExists($conn, $mail) !== false){
            header("location: ../signup.php?error=emialExists");
            exit();
        }

        createUser($conn, $username, $mail, $pass);
    }
    else{
        header("location: ../signup.php");
        exit();
    }