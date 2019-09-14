<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "web_page";

$conn = mysqli_connect($server, $username, $password, $dbname) or
 die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>