<?php


//access the data through $_post, which is an array of elements

echo "Hello, " . $_POST["firstname"];

//connect to the database

$connection = mysqli_connect("localhost", "root", "root", "athletes") or die(mysqli_error($connection));

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "\nConnected successfully";

//add this person to the database

$firstname = mysqli_real_escape_string($connection,$_POST["firstname"]);
mysqli_query($connection,"insert into athlete (firstname) values ('$firstname')") or die(mysqli_error($connection));


//show a list of people in the database
echo "<br /><br />Athletes already in the database: <br />";

$res = mysqli_query($connection,"select * from athlete");
while ($row = mysqli_fetch_assoc($res)) {
    echo $row["id"] . " " . $row["firstname"] . "<br />";
}


?>