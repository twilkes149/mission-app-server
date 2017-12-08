<?php
	
	require_once 'login.php';
	echo "hello world";

	$conn = new mysqli($hn, $db, $un, $pw);
	if ($conn->connect_error)
		echo "error connecting";
	else
		echo "connected";
?>