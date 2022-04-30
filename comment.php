
<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$comment=$_POST['comment'];
		$user_id = $user_data['user_id'];
		$user_name = $user_data['user_name'];
		

		if(!empty($comment))
		{
			$post_id = $_GET['id'];
			$query = "insert into comments (post_id,user_id,name,content) values ('$post_id','$user_id','$user_name','$comment')";
			mysqli_query($con, $query);
			header("Location: index.php");
			die;
		}else
		{
			echo "Must have a comment.";
		}
	}
	/*
	if (isset($_POST['Post_comment']))
	{
		$user=$_SESSION['id'];
		$user_name = $user_data['user_name'];
		$content=$_POST['content'];
		$post_id=$_POST['post_id'];
		$user_id=$_POST['user_id'];
		$time=time();
		

		{
			mySQLi_query($con,"INSERT INTO comments (post_id,user_id,name,content)
			VALUES ('$post_id','$user_id','$user_name','$content)");
			echo "<script>window.location='index.php'</script>";
		}
			
	}
	*/
	
?>

<html>
<head>
	<title>Make Comment</title>
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


	<div class="comment">
		<form action="comment.php" method="post">
			<h2>Make Comment</h2>
			Comment: <input type="text" name="comment"><br>
			
			<input type="submit" value="Make comment" />
		</form>
	</div>
	
	
	
	
	
	
	
	
	<div class="navbar">
		<a href="index.php">Home</a>
		<a href="create_post.php" >Make Post</a>
		<a href="comment.php?id=123">Comment</a>
		<a href="profile_page.php">Profile</a>
		<a href="logout.php">Logout</a>
	</div>
	
	

</body>
</html>