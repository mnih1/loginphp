<?php

    if(isset($_POST["submit"])){
        $mail = $_POST["mail"];
        $pass = $_POST["pass"];

        require_once("config.php");
        require_once("functions.php");

        if(checkInputLogin($mail, $pass) !== false ){
            header("location: ../signin.php?error=emptyInput");
            exit();
        }

        loginUser($conn, $mail, $pass);
        // 1:36:14
    }
    else {
        header("location: ../signin.php?error=cosposzlonietak");
        exit();
    }