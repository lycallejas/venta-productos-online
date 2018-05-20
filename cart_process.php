<?php
///SPRING 3
error_reporting(E_ALL);
	ini_set('display_errors', '1');
	
session_start();

if(!$_SESSION["rol"] == "cliente"){
	header("location:index.php");
}


$name=$_SESSION["name"];





?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Carro Compra</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>

	<!--  jQuery -->
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
   <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

	<!--<script src="js/jquery2.js"></script>-->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main2.js"></script>
	<script>
		/*
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
    */
</script>
	<style>
	table tr td {padding:10px;}
</style>
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Khan Store</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span>Producto</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">Registrar Orden</div>
					<div class="panel-body">
						<form id="register_orden" method="GET" action="payment_success.php"  onsubmit="return true" >


							<div class="row">
								<div class="col-md-12">
									<label for="nombre">Nombre y apellidos (*)</label>
									<input type="text" id="nombre" name="nombre" class="form-control" value=<?php echo $name;?> readonly>
								</div>
							</div> 

							<div class="row">
								<div class="col-md-12">
									<label for="tarjeta">Numero de la tarjeta (*)</label>
									<input type="text" id="tarjeta" name="tarjeta" class="form-control" required>
								</div>
							</div>


							<div class="row">
								<div class="col-md-12">
									<label for="codigo">Codigo de seguridad  (*)</label>
									<input type="text" id="codigo" name="codigo" class="form-control" required>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">	
      						    <label class="control-label" for="date">Fecha de Expiraciòn (*)</label>
        					    <input class="form-control" id="date" name="date"  type="date" required  />
								</div>
							</div>




							<p><br/></p>
							<input type="hidden" name="st" value="Completed">
							<div class="row">
								<div class="col-md-12">
									<input style="width:100%;" value="Registrar Pago" type="submit" name="signup_button"class="btn btn-success btn-lg">
								</div>
							</div>


						</form>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>






