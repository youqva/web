<?php
include("config.php");

if(isset($_POST['zayav_form'])) {
	
	$cake=$_POST["cake"]; 
	$email=$_POST["email"]; 
	$prepared = $mysqli->prepare("insert into zakaz(cake, email) values('".$cake."', '".$email."')"); 

	if($prepared->execute()) 
		header('Location: oformlen.html');
	else 
		echo "Ошибка запроса";
	$prepared->close();
}
?>