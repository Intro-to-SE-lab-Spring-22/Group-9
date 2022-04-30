<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    $post_selected_id = $_GET['id'];

    $sql = "DELETE FROM posts WHERE post_id = $post_selected_id AND post_by = '".$user_data["user_name"]."'";
	$result = $con->query($sql);

    echo "Post successfully deleted. <br>
    <a href=\"profile_page.php\">Return to Profile Page</a>";
?>