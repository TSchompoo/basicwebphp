<?php
$servername = "plearnja.com;
$username = "plearnja_cpsu7";
$password = "lzXuQCgB";
$dbname = "plearnja_cpsu7";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>