<?php

include 'session.php';
if (!isset($_SESSION['user_name'])) {
    die("not logged in");
    //header("Location: login.php");
}

//query for all swings
$sql = 'SELECT * FROM phone_swings';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch the resulting rows as an array
$swings = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free results from memory
mysqli_free_result($result);

//print_r($swings);

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
    <h4 class="center grey-text">Swings!</h4>

    <div class="container">
        <div class="row">

            <?php foreach($swings as $swing){ ?>

                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($swing); ?></h6>
                        </div>
                    </div>
                </div>
            

        </div>
    </div>
    <a href="phone_swing.php">PhoneSwing</a>
    <a href="logout.php">Logout</a>
    <a href="phone_swing.php">PhoneSwing</a>
    <a href="logout.php">Logout</a>

</body>

</html>