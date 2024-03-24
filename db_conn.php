<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudtuto";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}