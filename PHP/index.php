<?php
	
	require_once 'login.php';
	echo "hello world\n";

	$db = new PDO($dsn);

	try {
    	$dbh = new PDO("mysql:dbname=$db;host=$hn", $un, $pw);
    	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	} catch (PDOException $e) {
	    echo '\nConnection failed: ' . $e->getMessage();
	}
?>