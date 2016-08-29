<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "bankdb";
	
		$conn = mysqli_connect($servername, $username, $password, $database);

	$q = "SELECT displaypic FROM users WHERE userID=".$_GET['id'];
	$query = mysqli_query($conn, $q);
	while($row = mysqli_fetch_assoc($query))
	{
		echo $row["displaypic"];
	}
	header("content-type: image/jpeg");
	
?>