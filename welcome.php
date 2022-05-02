<?php

include 'session.php';
if (!isset($_SESSION['user_name'])) {
    die("not logged in");
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="welcome-style.css">
</head>

<body>
    <?php echo "<h1>Welcome to the database " . $_SESSION['user_name'] . "</h1>"; ?>
    <div class="option_box">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">
                    <h2>Instructions</h2>
                    <h3>Step 1</h3>
                    <p>If you would like to record a Golf Swing, click <a href="phone_swing.php">Record a Golf Swing</a>.</p>
                    <hr>

                    <h3>Step 2</h3>
                    <p>If you would like to review your recorded Golf Swings in order with the oldest at the top and newest at the bottom, click <a href="view_swings.php">View my swings</a>.</p>
                    <hr>

                    <h3>Step 3</h3>
                    <p>If you are done practicing, click <a href="logout.php">Logout</a>.</p>
                    <hr>



                </div>
            </div>
        </div>
    </div>
    <img src="baseball.gif" alt="baseball gif" style="width: 100%; height: 100%">
</body>

</html>