<?php

session_start();
if(!$_SESSION["rol"] == "admin"){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
  		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carrito Compras</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main2.js" charset="UTF-8"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style></style>
	</head>
