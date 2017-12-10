<?php
	
	require_once 'login.php';
	echo "hello world\n";

	

	$dsn = "pgsql:"
    . "host=".$hn.";"
    . "dbname=".$db.";"
    . "user=".$un.";"
    . "port=".$port.";"
    . "sslmode=require;"
    . "password=".$pw.";";

	//$db = new PDO($dsn);
	

	$conn = new mysqli($hn, $db, $un, $pw);
	if ($conn->connect_error)
		echo "error connecting: " . $conn->connect_error;
	else {
		echo "connected";		
	}

	try {
    	//$dbh = new PDO("mysql:dbname=$db;host=$hn", $un, $pw);
    	//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    echo '\nConnection failed: ' . $e->getMessage();
	}
?>