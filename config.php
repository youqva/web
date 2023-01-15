<?php
	$host = 'localhost';
	$dbuser = 'root';
	$dbpassword = '12345';
	$dbname = 'mysite';
	$mysqli = new mysqli($host, $dbuser, $dbpassword, $dbname);
	
	if ($mysqli->connect_error) {
		die('Ошибка подключения (' . $mysqli->connect_errno . ') '. 
		$mysqli->connect_error);
	}
?>