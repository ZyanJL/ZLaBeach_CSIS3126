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
</head>

<body>
    <?php echo "<h1>Welcome to the database " . $_SESSION['user_name'] . "</h1>"; ?>
    <a href="phone_swing.php">PhoneSwing</a>
    <a href="view_swings.php">view all swings</a>
    <a href="logout.php">Logout</a>
</body>

</html>