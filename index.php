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

	<h1>Welcome to Social!</h1>

	<br>
	Greetings, <?php echo $user_data['user_name']; 
	?><br>

	<?php
	$sql = 'SELECT * FROM posts';
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		  if ($row["post_public"] == 1) {
			echo "Post by: " . $row["post_by"]. " Caption: " . $row["post_caption"]. " Posted: " . $row["post_time"]. "<br>";
			echo"
				<a href=\"comment.php?id=" . $row["post_id"] . "\">Comment</a></br>
				";
			
		  }
	  }
	} else {
	  echo "0 results";
	}
	?>


<?php
	$sql = 'SELECT * FROM comments';
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	  while($row = $result->fetch_assoc()) {
		 echo "Comment by: " . $row["user_id"]. " Content: " . $row["content"]. " Posted on: " . $row["post_id"]. "<br>";
	  }
	} else {
	  echo "0 results";
	}
	?>
	
	
	
	
	
	
	
	
	
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
		<a href="comment.php?id=" . $row["post_id"]>Comment</a>
		<a href="profile_page.php">Profile</a>
		<a href="logout.php">Logout</a>
	</div>
	
	
</body>
</html>
