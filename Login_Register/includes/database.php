<?php

    //Params to connect to a Database
    $dbHost = "localhost:3307";
    $dbUser = "root";
    $dbPass = '';
    $dbName = "phptutorial";

    //Connection to Database
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die("Database Connection Failed !");
    }

?>