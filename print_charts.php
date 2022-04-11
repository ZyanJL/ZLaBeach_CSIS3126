<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<body>

        <script src="https://cdn.jsdelivr.net/npm/d3@7"></script>
        <script src="https://cdn.jsdelivr.net/npm/@observablehq/plot@0.4"></script>


        <?php



        // Here, we use single quotes for PHP and double quotes for JavaScript
        echo '<script type="text/javascript">';
     


        //include time measure for the swing


        $swingdata = file_get_contents($_GET["filename"]);
        $swingdata = json_decode($swingdata, 1);




        echo 'swingdata = [';
        for ($i = 0; $i < sizeof($swingdata["x"]); $i++) {



                echo '{"step":' . $i . ',';
                echo '"accel_x": ' . $swingdata["x"][$i] . ',';
                echo '"accel_y": ' . $swingdata["y"][$i] . ',';
                echo '"accel_z": ' . $swingdata["z"][$i] . '},';
        }

        echo '];';

        ?>




        plot = Plot.line(swingdata, {x: "step", y: "accel_x"}).plot();
        document.body.appendChild(plot);
        plot = Plot.line(swingdata, {x: "step", y: "accel_y"}).plot();
        document.body.appendChild(plot);
        plot = Plot.line(swingdata, {x: "step", y: "accel_z"}).plot();
        document.body.appendChild(plot);

        </script>


</body>

</html>