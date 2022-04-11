<?php

include 'session.php';

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

$data = $_POST["data"];

$filename = $user_name . time() . '.txt';

$date = date("Y-m-d H:i:s");

file_put_contents($filename, $data);


$sql = "INSERT INTO phone_swings (filename, user_id, date)
    VALUES ('$filename', '$user_id', '$date')";
$result = mysqli_query($conn, $sql) or die($sql);
