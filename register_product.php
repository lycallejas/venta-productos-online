<?php

session_start();
if(!$_SESSION["rol"] == "admin"){
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carrito de compra</title>

		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		
		<script src="js/jquery2.js"></script>
		
		<script type="text/javascript">
			var jquery_2_2_2=jQuery.noConflict();
			  window.jQuery = jquery_2_2_2;
		</script>
	

		<script src="js/bootstrap.min.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript">
			var jquery_3_2_1=jQuery.noConflict();
			window.jQuery = jquery_3_2_1;
		</script>


		

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script type="text/javascript">
			var jqueryvalidator=jQuery.noConflict();
			window.jQuery = jqueryvalidator;
		</script>


		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

		<script  src="js/rules_formproduct.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	
           

		<style type="text/css">
		
       @media only screen and (max-width: 768px) {
         .margen_superior{
          padding-top: 23%;
         } 
     	}

     	@media (min-width:769px ){

     	 .margen_superior{
          padding-top: 0%;
         } 
     	}
		</style>
		
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="register_admin.php" class="navbar-brand">Registro Admin</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span>Listado Clientes</a></li>
				<li><a href="list_product.php"><span class="glyphicon glyphicon-modal-window"></span>Listado Productos</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["rol"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="#" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="#" style="text-decoration:none; color:blue;">Ordenes</a></li>
						<li class="divider"></li>
						<li><a href="" style="text-decoration:none; color:blue;">Chnage Password</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
