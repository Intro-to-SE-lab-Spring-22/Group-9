
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

	
	<h1> <?php echo $user_data['user_name']; ?>'s Profile Page </h1>
    <h3> User ID: <?php echo $user_data['user_id']; ?> </h3>
    
    <br/>
    
	<?php
	$sql = "SELECT * FROM posts WHERE post_by = '".$user_data["user_name"]."'";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
			echo "<br>Post by: " . $row["post_by"]. "<br> Caption: " . $row["post_caption"]. "<br> Posted: " . $row["post_time"]. "<br>";
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
		<a href="profile_page.php">Profile</a>
		<a href="logout.php">Logout</a>
	</div>

</body>
</html>
