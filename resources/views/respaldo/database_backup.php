<?php

    error_reporting(0);

	include 'backup_function.php';

	if(isset($_POST['backupnow'])){
		
		$server = $_POST['localhost:3308'];
		$username = $_POST['root'];
		$password = $_POST[''];
		$dbname = $_POST['noysita_oficial'];

		
		backDb($server, $username, $password, $dbname);

		exit();
		
	}
	else{
		echo 'Add All Required Field';
	}

?>