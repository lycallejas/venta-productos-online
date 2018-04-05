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
		<script src="main.js"></script>
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
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Inicio</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Productos</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid margen_superior">
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
					<div class="panel-heading">Formulario Registro Producto</div>
					<div class="panel-body">
					
					<form id="register_product" method="POST" action="dat_productos.php" onsubmit="return true" enctype="multipart/form-data">
						
                         
                         <div class="row">
							<div class="col-md-12">
								<label for="n_documento">Referencia (*)</label>
								<input type="text" id="referencia" name="referencia" class="form-control">
							</div>
						</div> 

						 <div class="row">
							<div class="col-md-12">
								<label for="n_documento">Nombre Empresa (*)</label>
								<input type="text" id="empresa" name="empresa" class="form-control">
							</div>
						</div>


						 <div class="row">
							<div class="col-md-12">
								<label for="n_cliente">Nombre  (*)</label>
								<input type="text" id="nombre" name="nombre" class="form-control">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="n_cliente">Descripcion  (*)</label>
								<textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Resumen" maxlength="240" ></textarea>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Tipo (*)</label>
								<input type="text" id="tipo" name="tipo"class="form-control">
							</div>
						</div>	

						<div class="row">
							<div class="col-md-12">
								<label for="address1">Material (*)</label>
								<input type="text" id="material" name="material"class="form-control">
							</div>
						</div>
							
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Dimensiòn alto y profundidad (cm) (*)</label>
								<input type="text" id="dimension" name="dimension"class="form-control">
							</div>
						</div>
						 
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Color (*)</label>
								<input type="text" id="color" name="color" class="form-control">
							</div>
						</div> 

						<div class="row">
							<div class="col-md-12">
								<label for="address1">Peso (gr) (*)</label>
								<input type="text" id="peso" name="peso" class="form-control">
							</div>
						</div>

						

						<div class="row">
							<div class="col-md-12">
								<label for="address1">Precio (*)</label>
								<input type="text" id="precio" name="precio" class="form-control">
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<label for="address1">Unidades (*)</label>
								<input type="text" id="unidades" name="unidades" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label for="f_documento">Categoria (*)</label>
							<select class="form-control col-md-6">
                             <option value="1">Electronico</option>
                             <option value="2">Ropa de  Mujer</option>
                             <option value="3">Ropa  de Hombre</option>
                             <option value="4">Ropa  de Niño</option>
                             <option value="5">Muebles</option>
                             <option value="6">Electrodomesticos</option>
                             <option value="7">Gadgets Electronicos</option>
							</select>
						 </div>
                        
                        <div class="row">
							<div class="col-md-12">
								<label for="address1">Foto (*)</label>
								<input type="file" id="foto" name="foto">
							</div>
						</div>   

						
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
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






















