<?php

include 'session.php';

$data = $_POST["data"];

$filename = 'user_name' + time() + '.txt';  

$date = date("Y.m.d");

file_put_contents($filename,$data);


$sql = "INSERT INTO phone_swings (filename, id, date)
    VALUES ('$filename', '$user_id', '$date')";
$result = mysqli_query($conn, $sql);
