<?php
	require_once '../../login.php';//used to get database connections

	echo "this is user login\n";
	$userName = 'test';
	$password = 'test';

	foreach ($_POST as $key => $value) {
		echo "{$key} => {$value} ";
	}

	//check post array
	if (isset($_POST['userName']) && issset($_POST['password'])) {
		$userName = getPost('userName');
		$password = getPost('password');
	}

	echo "username: $userName, password: $password\n";
	echo $userName;
	echo $password;

	//this function is used to sanitize the post array
	function getPost($var) {
		return $_POST[$var];
	}
?>