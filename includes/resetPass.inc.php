<?php

if(isset($_POST['reset-btn'])){
    use PHPMailer\PHPMailer\PHPMailer;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
}

// 17:17 czas