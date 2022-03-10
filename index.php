<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Welcome to Social!</h1>

	<br>
	Greetings, <?php echo $user_data['user_name'];
	?>
</body>
</html>
