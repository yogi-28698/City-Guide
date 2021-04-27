<?php

$server = "localhost:3307";
$username = "root";
$password = '';
$database = "phptutorial";

//Connection to Database
$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failure!')</script>");
}

?>