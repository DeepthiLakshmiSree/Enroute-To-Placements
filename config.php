<?php 

$host= "localhost";
$user = "root";
$pass = "";
$database = "project";

$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>