<?php

include 'session.php';

error_reporting(E_ERROR | E_WARNING | E_PARSE);

if (isset($_SESSION['user_name'])) {
	header("Location: welcome.php");
}
if (isset($_POST['submit'])) {
	$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
	$password = md5($_POST['password']);
	$sql = "SELECT * FROM athlete WHERE user_name='$user_name' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		print_r($row);
		$_SESSION['user_name'] = $row['user_name'];
		$_SESSION['user_id'] = $row['user_id'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! user_name or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Login Form - Design Project</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-user_name">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="user_name" placeholder="username" name="user_name" value="<?php echo $user_name; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</body>

</html>