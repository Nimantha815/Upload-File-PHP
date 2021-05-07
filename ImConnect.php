<?php 	
    $dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'imagestore';

	$connection = mysqli_connect('localhost', 'root', '','imagestore');
	//checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed' . mysqli_connect_error());
	}
    
?>