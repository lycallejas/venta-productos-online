<?php
error_reporting(E_ALL);
	ini_set('display_errors', '1');
// Include config file
 require_once 'db.php';
 
// Define variables and initialize with empty values
$titulo = $autor = $calificacion = $comentario = "";
$titulo_err = $autor_err = $calificacion_err = $comentario_err = "";
 
 

// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){

	echo "entro";
    // Get hidden input value
 $id = $_POST["id"];
 $tipodocumento=$_POST["tipodocumento"];
 $documento=$_POST["n_documento"];
 $nombre=$_POST["nombre"];
 $telefono=$_POST["mobile"];
 $direccion=$_POST["address1"];
 $ciudad=$_POST["ciudad"];
 $departamento=$_POST["departamento"];
 $pais=$_POST["pais"];
 $profesion=$_POST["profesion"];
$email=$_POST["email"];
  
 
      $sql = "UPDATE user_info SET tipo_documento=?, numero_documento=?, nombre_completo=? ,telefono=? , direccion=? , ciudad=? , departamento=? , pais=? , profesion=? ,email=?  WHERE user_id=?";
         
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
             mysqli_stmt_bind_param($stmt, "ssssssssssi",$tipodocumento_p, $documento_p,$nombre_p,$telefono_p,$direccion_p,$ciudad_p,$departamento_p,$pais_p,$profesion_p,$email_p,$id_p);
            
            // Set parameters

             $id_p = $_POST["id"];
             $tipodocumento_p=$tipodocumento;
             $documento_p=$_POST["n_documento"];
             $nombre_p=$_POST["nombre"];
             $telefono_p=$_POST["mobile"];
             $direccion_p=$_POST["address1"];
             $ciudad_p=$_POST["ciudad"];
             $departamento_p=$_POST["departamento"];
             $pais_p=$_POST["pais"];
             $profesion_p=$_POST["profesion"];
             $email_p=$_POST["email"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: list_client.php");
                exit();
            } else{
                echo "Algo no esta funcionando bien";
            }
        }
       
    
    // Close connection
 mysqli_close($con);
 



} else{
    // Check existence of id parameter before processing further


    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);

        
        // Prepare a select statement
        $sql = "SELECT * FROM user_info WHERE user_id = ?";
        if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $documento = $row["tipo_documento"];
                    $numero_doc = $row["numero_documento"];
                    $nombre_completo = $row["nombre_completo"];
                    $telefono=$row["telefono"];
                    $direccion=$row["direccion"];
                    $ciudad=$row["ciudad"];
                    $departamento=$row["departamento"];
                    $pais=$row["pais"];
                    $profesion=$row["profesion"];
                    $email=$row["email"];


                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Algo anda mal";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
      mysqli_close($con);       
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        echo "Oops! Algo anda mal asdasdsad";
        exit();
    }
}//else






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
					<div class="panel-heading">Actualizar Cliente</div>
					<div class="panel-body">
					
					<form id="register_clients" action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post" >
						
 						
						<div class="form-group">
							<label for="f_documento">Tipo de documento (*)</label>
							<select class="form-control col-md-6" id="tipodocumento" name="tipodocumento">
                             <option value="cedula">Cedula</option>
							</select>
						 </div>
						 
                         <div class="form-group">
								<label for="n_documento">Numero de documento (*)</label>
								<input type="text" id="n_documento" name="n_documento" class="form-control" value="<?php echo $numero_doc; ?>">
						 </div>
						
						 	<div class="form-group">
								<label for="n_cliente">Nombre completo del cliente (*)</label>
								<input type="text" id="nombre" name="nombre"class="form-control" value="<?php echo $nombre_completo; ?>">
							</div>
						
						
							<div class="form-group">
								<label for="mobile">Telefono de residencia (*)</label>
								<input type="text" id="mobile" name="mobile"class="form-control" value="<?php echo $telefono; ?>">
							</div>
						
						
							<div class="form-group">
								<label for="address1">Direcciòn (*)</label>
								<input type="text" id="address1" name="address1"class="form-control" value="<?php echo $direccion; ?>">
							</div>
							
						
							<div class="form-group">
								<label for="address1">Ciudad de residencia (*)</label>
								<input type="text" id="ciudad" name="ciudad"class="form-control" value="<?php echo $ciudad; ?>">
							</div>
						 
					
							<div class="form-group">
								<label for="address1">Departamento (*)</label>
								<input type="text" id="departamento" name="departamento" class="form-control" value="<?php echo $departamento; ?>">
							</div>
					
					
							<div class="form-group">
								<label for="address1">Pais (*)</label>
								<input type="text" id="pais" name="pais" class="form-control" value="<?php echo $pais; ?>">
							</div>
					
						
							<div class="form-group">
								<label for="address1">Profesiòn (*)</label>
								<input type="text" id="profesion" name="profesion" class="form-control" value="<?php echo $profesion; ?>">
							</div>
						

			
						
							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control" value="<?php echo $email; ?>">
							</div>
						
						<p><br/></p>
						<div class="row">
							<div class="col-md-6">
								<input type="hidden" name="id" value="<?php echo $id; ?>"/>
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























