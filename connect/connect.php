<?php
    $host = "localhost";
    $user = "kkb75281";
    $pass = "rbql11002!";
    $db = "kkb75281";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }


?>