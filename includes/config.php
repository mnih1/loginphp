<?php

    $db_host = "localhost";
    $db_user = "config";
    $db_pass = "SuperTajneHaslo123@";
    $db_name = "something";

    $conn = @new mysqli($db_host, $db_user, $db_pass, $db_name);
    if($conn->connect_errno !=0){
        echo "Błąd połączenia: " . $conn->connect_error;
    }