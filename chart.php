<?php
$swingdata = file_get_contents('data.txt');
$swingarray = explode(":", $swingdata);
print_r($swingarray);


?>
