<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
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
		<form method="post" action="submit_post" method="post">
			<h2>Make Post</h2>
			<hr>
			<span style="float:right; color:black">
            <input type="checkbox" id="public" name="public">
            <label for="public">Public</label>
            </span>
			Caption <span class="required" style="display:none;"> *You can't Leave the Caption Empty.</span><br>
            <textarea rows="6" name="caption"></textarea>
            <center><img src="" id="preview" style="max-width:580px; display:none;"></center>
			<div class="createpostbuttons">
                    <!--<form action="" method="post" enctype="multipart/form-data" id="imageform">-->
                    <label>
                        <img src="">
                        <input type="file" name="fileUpload" id="imagefile">
                        <!--<input type="submit" style="display:none;">-->
                    </label>
                    <input type="submit" value="Post" name="post">
                    <!--</form>-->
            </div>
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