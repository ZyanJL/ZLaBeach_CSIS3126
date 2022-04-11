<<<<<<< HEAD
<?php 
$server = "mysql.labeach.jwuclasses.com";
$user = "labeach";
$pass = "jordin1999!";
$database = "labeach";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

=======
<?php 

$server = "localhost";
$user = "root";
$pass = "root";
$database = "athletes";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

>>>>>>> f868acfa2c31981e5d363b88635a05be2610137c
?>