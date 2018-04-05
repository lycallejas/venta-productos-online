<?php
//if (isset($_GET["register"])) {
	
	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carrito de compra</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
           
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
		<script  src="js/rules_formproduct.js" type="text/javascript"></script>
		<script src="js/main2.js" charset="UTF-8"></script>
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
				<a href="#" class="navbar-brand">Carrito de compras</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="register_client.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
				<li><a href="list_client.php"><span class="glyphicon glyphicon-modal-window"></span>Productos</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid margen_superior" >
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Formulario Registro Clientes</div>
					<div class="panel-body">
					
					<form id="register_client" onsubmit="return false" >
						
 						
						<div class="form-group">
							<label for="f_documento">Tipo de documento (*)</label>
							<select class="form-control col-md-6" id="tipodocumento" name="tipodocumento">
                             <option value="cedula">Cedula</option>
							</select>
						 </div>
						 
                         <div class="form-group">
								<label for="n_documento">Numero de documento (*)</label>
								<input type="text" id="n_documento" name="n_documento"class="form-control">
						 </div>
						
						 	<div class="form-group">
								<label for="n_cliente">Nombre completo del cliente (*)</label>
								<input type="text" id="nombre" name="nombre"class="form-control">
							</div>
						
						
							<div class="form-group">
								<label for="mobile">Telefono de residencia (*)</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						
						
							<div class="form-group">
								<label for="address1">Direcciòn (*)</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
							
						
							<div class="form-group">
								<label for="address1">Ciudad de residencia (*)</label>
								<input type="text" id="ciudad" name="ciudad"class="form-control">
							</div>
						 
					
							<div class="form-group">
								<label for="address1">Departamento (*)</label>
								<input type="text" id="departamento" name="departamento" class="form-control">
							</div>
					
					
							<div class="form-group">
								<label for="address1">Pais (*)</label>
								<input type="text" id="pais" name="pais" class="form-control">
							</div>
					
						
							<div class="form-group">
								<label for="address1">Profesiòn (*)</label>
								<input type="text" id="profesion" name="profesion" class="form-control">
							</div>
						

			
						
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						
						<p><br/></p>
						<div class="row">
							<div class="col-md-6">
								<input style="width:50%; text-align: center; margin-left: 23%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
	   </div>
	</div>
</body>
</html>
	<?php
//}



?>






















