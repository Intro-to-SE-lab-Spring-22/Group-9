<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$caption = $_POST["caption"];
		$time = date("m,d,Y,h,i,sa");
		if (isset($_POST["public_check"]))
			$public = 1;
		else
			$public = 0;
		$user_id = $user_data['user_id'];
		

		if(!empty($caption))
		{
			$post_id = random_num(20);
			$query = "insert into posts (post_id,post_caption,post_public,post_by) values ('$post_id','$caption','$public','$user_id')";
			mysqli_query($con, $query);
			header("Location: index.php");
			die;
		}else
		{
			echo "Must have a caption.";
		}
	}
?>


<html>
<head>
	<title>Make Post</title>
</head>
<body>

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


	<div class="createpost">
		<form action="create_post.php" method="post">
			<h2>Make Post</h2>
			Caption: <input type="text" name="caption"><br>
			Is Public? <input type="checkbox" name="public_check"><br>
			<input type="submit" value="Make Post" />
		</form>
	</div>
	
	
	
	
	
	
	
	
	<div class="navbar">
		<a href="index.php">Home</a>
		<a href="create_post.php" >Make Post</a>
		<a href="profile_page.php">Profile</a>
		<a href="logout.php">Logout</a>
	</div>
	
	

</body>
</html>