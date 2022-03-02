<html>
<body>
<?php

// Here, we use single quotes for PHP and double quotes for JavaScript
echo '<script type="text/javascript">';
echo 'document.write("Hello World!")';

$swingdata = file_get_contents('data.txt');
$swingdata = json_decode($swingdata, 1);
echo "<pre>";

//print_r($swingdata);
//echo $swingdata["x"] [0];


for ($i = 0; $i < sizeof($swingdata[x]); $i++) {
    
    
    echo 'swingchart = [';
        echo '{"step":$i,'
        echo '"accel_x": $swingdata["x"] [$i],';
        echo '"accel_y": $swingdata["y"] [$i],';
        echo '"accel_z": $swingdata["z"] [$i];}';
    
    print_r($swingchart);
    
    
    echo $swingdata["x"] [$i];
}






echo '</script>';

?>
</body>
</html>
