<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "intro to se project";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
