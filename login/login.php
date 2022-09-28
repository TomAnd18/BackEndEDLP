<?php

    $user = $_POST ["user"];
    $password = $_POST ["password"];

    $checkUser = "admin";
    $checkPassword = "1379";

    if($user == $checkUser && $password == $checkPassword) {
        header("location:https://tomand18.github.io/PokeApi/");
    } else {
        header("location:error.html");
    }

?>