<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Demo - Zyan's acceleration trial & error</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>JavaScript Sensor Access Demo</title>
    <style>
      #demo-div {color: lightgrey; border-radius: 0.3rem;}
      #demo-div span, #demo-div #num-observed-events {color: black;}
      h1 {margin-top: 0.5rem;}
      h4 {margin-top: 0.66rem; font-size:1.33rem;}
      #demo-div li {line-height: 21px;}
      #demo-div ul {margin-bottom: 0.66rem;}
    </style>
</head>
<body>
<main role="main" class="container">





<div class="p-3 mb-2 bg-secondary" id="demo-div">
<a id="start_demo" class="btn btn-lg btn-success py-1" href="#" role="button">Begin</a>
<p style="margin-top:1rem;">Num. of datapoints: <span class="badge badge-warning" id="num-observed-events">0</span></p>




<h4>Accelerometer</h4>
<ul>
  <li>X-axis: <span id="Accelerometer_x">0</span><span> m/s<sup>2</sup></span></li>
  <li>Y-axis: <span id="Accelerometer_y">0</span><span> m/s<sup>+2</sup></span></li>
  <li>Z-axis: <span id="Accelerometer_z">0</span><span> m/s<sup>2</sup></span></li>
  <li>Data Interval: <span id="Accelerometer_i">0</span><span> ms</span></li>
</ul>





</div>
</main>
<footer class="footer">
  <div class="container">
    
    
  </div>
  <div id="debug">
    Debug info here<br />
  </div>
</footer>
<script>



function incrementEventCount(){
  let counterElement = document.getElementById("num-observed-events")
  let eventCount = parseInt(counterElement.innerHTML)
  counterElement.innerHTML = eventCount + 1;
}

function updateFieldIfNotNull(fieldName, value, precision=10){
  if (value != null)
    document.getElementById(fieldName).innerHTML = value.toFixed(precision);
}


var am_measuring = 0;

var measure = {'x':[], 'y':[], 'z':[]};




function handleMotion(event) {

  updateFieldIfNotNull('Accelerometer_x', event.acceleration.x);
  updateFieldIfNotNull('Accelerometer_y', event.acceleration.y);
  updateFieldIfNotNull('Accelerometer_z', event.acceleration.z);

  updateFieldIfNotNull('Accelerometer_i', event.interval, 2);

  

    

    if ((event.acceleration.x>10 || event.acceleration.y > 10|| event.acceleration.z > 10) && am_measuring == 0){
      $('#debug').append('Started measuring <br />');
      am_measuring = 1;
    }

    if (am_measuring == 1) {
      measure["x"].push(event.acceleration.x);
      measure["y"].push(event.acceleration.y);
      measure["z"].push(event.acceleration.z);
    }
    
    if (am_measuring == 1 && event.acceleration.x<20 && event.acceleration.y < 20 && event.acceleration.z < 20){
      $('#debug').append('Stopped measuring <br />');
      am_measuring = 2;
      
      $('#debug').append(JSON.stringify(measure));


      $.ajax({
        type: "POST",
        url: "demo_store.php",
        data: {"data": JSON.stringify(measure)}
      });
      //encode the "measure" variable as JSON
      //$.post(.....) to submit it to the server component
    }

}



$.ajax({
        type: "POST",
        url: "demo_store.php",
        data: {"data": JSON.stringify(measure)}
      });

let is_running = false;
let demo_button = document.getElementById("start_demo");
demo_button.onclick = function(e) {
  e.preventDefault();
  
  // Request permission for iOS 13+ devices
  if (
    DeviceMotionEvent &&
    typeof DeviceMotionEvent.requestPermission === "function"
  ) {
    DeviceMotionEvent.requestPermission();
  }
  
  if (is_running){
    window.removeEventListener("devicemotion", handleMotion);
    window.removeEventListener("deviceorientation", handleOrientation);
    demo_button.innerHTML = "Start demo";
    demo_button.classList.add('btn-success');
    demo_button.classList.remove('btn-danger');
    is_running = false;
  }else{
    window.addEventListener("devicemotion", handleMotion);
    window.addEventListener("deviceorientation", handleOrientation);
    document.getElementById("start_demo").innerHTML = "Stop demo";
    demo_button.classList.remove('btn-success');
    demo_button.classList.add('btn-danger');
    is_running = true;
  }
};


</script>
</body>
</html>