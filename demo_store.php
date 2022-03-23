<?php

include 'session.php';



$data = $_POST["data"];

$filename = 'user_name' + time() + '.txt';  

file_put_contents($filename,$data);


?>