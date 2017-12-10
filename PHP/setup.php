<?php
	require_once "login.php";

	$conn = new mysqli($hn, $un, $pw, $db);

	//create database connection
	if ($conn->connect_error
		echo "Connection error: " . $conn->connect_error;

	//set up sql statement
	$query = "CREATE TABLE if not exists user (
		id INT NOT NULL AUTO_INCREMENT,
		userName TEXT NOT NULL,
		password TEXT NOT NULL);";

	$result = $conn->query($query);//query the database
	if (!$result)//error happened
		echo "Database query failed: " . $conn->error;
	else
		echo "Success.";
?>