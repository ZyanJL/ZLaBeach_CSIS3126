<?php 
$server = "mysql.labeach.jwuclasses.com";
$user = "labeach";
$pass = "jordin1999!";
$database = "labeach";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>