<?php

    function checkInput($username, $mail, $pass, $passRepeat){
        $result;
        if (empty($username) || empty($mail) || empty($pass) || empty($passRepeat)){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }

    function invalidUname($username){
        $result;
        if(!preg_match("/^[a-zA-Z0-9]+$/", $username)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function invalidEmail($mail){
        $result;
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function passMatch($pass, $passRepeat){
        $result;
        if ($pass !== $passRepeat){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
    function userExists($conn, $username){
        $sql = "SELECT * FROM users WHERE username = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtFailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row =mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);

    }

    function emialExists($conn, $mail){
        $sql = "SELECT * FROM users WHERE mail = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtFailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $mail);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row =mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);

    }

    function createUser($conn, $username, $mail, $pass){
        $sql = "INSERT INTO users (userName, mail, pass) VALUES (?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../signup.php?error=stmtFailed");
            exit();
        }

        $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "sss", $username, $mail, $hashedPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../signup.php?error=none");
        exit();

    }