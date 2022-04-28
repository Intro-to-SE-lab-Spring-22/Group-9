
<?php 
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
?>

<html>
<head>
	<title>My Profile</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1> <?php echo $user_data['user_name']; ?>'s Profile Page </h1>
    <h3> User ID: <?php echo $user_data['user_id']; ?> </h3>
    
    <br/>
    <br/>

	
	<style type="text/css">
	
	.navbar {
		background-color: #333;
		overflow: hidden;
		position: fixed;
		bottom: 0;
		width: 100%;
	}
	
	.navbar a {
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	.navbar a:hover {
		background-color: #ddd;
		color: black;
	}

	.navbar a.active {
		background-color: #04AA6D;
		color: white;
	}

	</style>
	
	<div class="navbar">
		<a href="index.php">Home</a>
		<a href="create_post.php" >Make Post</a>
		<a href="profile_page.php">Profile</a>
		<a href="logout.php">Logout</a>
	</div>

</body>
</html>
