<?php
	// Database credentials
	define('DB_SERVER', 'my-db.caxe3rowxept.ap-south-1.rds.amazonaws.com');
	define('DB_USERNAME', 'admin');
	define('DB_PASSWORD', 'narendra');
	define('DB_NAME', 'login_system');

	// Attempt to connect to MySQL database
	$mysql_db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if (!$mysql_db) {
		die("Error: Unable to connect " . $mysql_db->connect_error);
	}