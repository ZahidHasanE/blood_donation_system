<!DOCTYPE html>
<html>
<head>
	<title>Donate Blood</title>
	<meta charset="utf-8">
  
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<link rel="stylesheet" type="text/css" href="CSS/style.css">
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  
</head>
<body>
	<?php 
			session_start();
			if(isset($_SESSION['username'])&& !empty($_SESSION['username'])){
					include 'navbar.php';
				}
			else{
					include'navbar.php';
				}
			

		 ?>