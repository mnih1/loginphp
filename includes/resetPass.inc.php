<?php

if(isset($_POST["reset-btn"])){

    $email = $_POST["mail"];
    
    require_once("config.php");
    require_once("functions.php");

    ifcheckInputForgetpass($email) !== false){
        header("location: ../forgetPassword.php?error=emptyInput");
        exit();
    }
    if(emialExists($conn, $email) !== false){
        header("location: ../forgetPassword.php?error=noEmail");
        exit();
    }

    $selector = bin2hx(random_bytes(8));
    $token = random_bytes(32);

    $url = "http://localhost/loginphp/create-new-pass.php?selector=" . $selector . "&validator=" . bin2hex($token);

    $expires = date("U") + 300;

    $sql = "DELETE FROM passReset WHERE passResetEmail=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location : ../forgetPassword.php?error=stmtFailed");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO passReset (passEmail, passSelector, passToken, passResetExpires) VALUSES (?, ?, ?, ?);";

    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location : ../forgetPassword.php?error=stmtFailed");
        exit();
    }
    else{
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ssss", $email, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close();
    
    $subject = 'Zresetuj swoje hasło dla konta Something';

    $message = '<p>Otrzymaliśmy prośbę resetu hasła na twoje konto. Jeśli to nie ty zignoruj ten email</p>';
    $message .= '<p>Link do zresetowania hasła: </br>';
    $message .= '<a href="' . $url .'" target="_blank">' . $url . '</a></p>'

    $mail = new PHPMailer(true);

    try{
        $mail->isSMTP;
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = tru;
        $mail->Username = 
    }
    // 9:07
    
    // use PHPMailer\PHPMailer\PHPMailer;

    // require 'PHPMailer/src/Exception.php';
    // require 'PHPMailer/src/PHPMailer.php';
    // require 'PHPMailer/src/SMTP.php';
}

// 17:17 czas