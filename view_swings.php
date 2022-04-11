<<<<<<< HEAD
<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php echo "<h1>Welcome " . $_SESSION['user_name'] . "</h1>"; ?>
    <a href="phone_swing.php">PhoneSwing</a>
    <a href="logout.php">Logout</a>

    <?php

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];

    //query for all swings
    $sql = "SELECT filename FROM phone_swings WHERE user_id = " . $user_id;
   
    //make query and get result
    $result = mysqli_query($conn, $sql); 

    //fetch the resulting rows as an array of filenames
    if ($result->num_rows > 0) {
        //output data
        while ($row = $result->fetch_assoc()) {
            echo "<br>" . "<a href='print_charts.php?file=" .  $row["filename"] . "'>" .  $row["filename"] . "</a>";
        }
    } else {
        echo "0 results";
    }

    //free results from memory
    mysqli_free_result($result);

    //print_r($swings);

    ?>


</body>

=======
<?php 
include 'session.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <?php echo "<h1>Welcome " . $_SESSION['user_name'] . "</h1>"; ?>
    <a href="phone_swing.php">PhoneSwing</a>
    <a href="logout.php">Logout</a>

    <?php

    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];

    //query for all swings
    $sql = "SELECT filename FROM phone_swings WHERE user_id = " . $user_id;
   
    //make query and get result
    $result = mysqli_query($conn, $sql); 

    //fetch the resulting rows as an array of filenames
    if ($result->num_rows > 0) {
        //output data
        while ($row = $result->fetch_assoc()) {
            echo "<br>" . "<a href='print_charts.php?file=" .  $row["filename"] . "'>" .  $row["filename"] . "</a>";
        }
    } else {
        echo "0 results";
    }

    //free results from memory
    mysqli_free_result($result);

    //print_r($swings);

    ?>


</body>

>>>>>>> f868acfa2c31981e5d363b88635a05be2610137c
</html>