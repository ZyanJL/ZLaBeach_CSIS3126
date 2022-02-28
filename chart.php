<?php



$swingdata = file_get_contents('data.txt');
$swingdata = json_decode($swingdata, 1);
echo "<pre>";

//print_r($swingdata);
//echo $swingdata["x"] [0];


for ($i = 0; $i < sizeof($swingdata[x]); $i++) {
    
    /*
    $swingchart = [
        {'step':$i,
        'accel_x': $swingdata["x"] [$i];,
        'accel_y': $swingdata["y"] [$i];,
        'accel_z': $swingdata["z"] [$i];},
    
    print_r($swingchart);
    */
    
    echo $swingdata["x"] [$i];
}

?>
