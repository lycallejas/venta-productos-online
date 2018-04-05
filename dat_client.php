<?php 

error_reporting(E_ALL);
	ini_set('display_errors', '1');

include "db.php";
if (isset($_POST["n_documento"])) {

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





	//existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE numero_documento = '$documento' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_document = mysqli_num_rows($check_query);
	if($count_document > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>El documento ya existe en nuestra base de datos</b>
			</div>
		";
		exit();
	} else {
		$sql = "INSERT INTO `user_info` 
		( `tipo_documento`, `numero_documento`, `nombre_completo`, 
		`telefono`, `direccion`, `ciudad`, `departamento`, `pais`, `profesion`, `email`) 
		VALUES ('$tipodocumento', '$documento', '$nombre', 
		'$telefono', '$direccion', '$ciudad', '$departamento', '$pais', '$profesion', '$email')";
		$run_query = mysqli_query($con,$sql);
		$ip_add = getenv("REMOTE_ADDR");
	
		if(mysqli_query($con,$sql)){
			echo "register_success";
			exit();
		}
	}
	}
	




?>


