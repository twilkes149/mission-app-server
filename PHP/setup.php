<?php
	require_once "login.php";

	$db = new PDO($dsn);//create database link

	//create database connection
	try {
    	$dbh = new PDO("mysql:dbname=$db;host=$hn", $un, $pw);
    	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    	//set up sql statement
			$query = "CREATE TABLE if not exists user (
				id INT NOT NULL AUTO_INCREMENT,
				userName TEXT NOT NULL,
				password TEXT NOT NULL);";

    	$result = $dbh->query($query);
    	
    	if ($result)
    		echo "success";
    	else
    		echo "failed";
      
	} catch (PDOException $e) {
	    echo '\nConnection failed: ' . $e->getMessage();
	} catch (Exception $e) {
		echo '/Failed: ' . $e->getMessage();
	}

?>