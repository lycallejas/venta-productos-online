<?php

error_reporting(E_ALL);
	ini_set('display_errors', '1');

//session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";

if(isset($_POST["page"])){
	$sql = "SELECT * FROM user_info";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page'>$i</a></li>
		";
	}
}



if(isset($_POST["getClient"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM user_info LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){

			echo "	<div class='table-responsive' style='background-color:white ;''>
							<table class='table table-hover'>
								<thead >
									<tr>
										<th data-field='id' data-align='right'>Documento</th>
										<th data-field='nombre'>Nombre </th>
										<th data-field='direccion'>Direccion</th>
										<th data-field='ciudad'> Ciudad</th>
										<th data-field='departamento'>Departamento</th>
										<th data-field='pais'> Pais</th>
										<th data-field='profesion'>Profesion</th>
										<th data-field='email'> Email</th>
										<th data-field='accion'>Acciòn</th>
									</tr>
								</thead>
								<tbody >";	





		while($row = mysqli_fetch_array($run_query)){
			$client_id    = $row['user_id'];
			$client_doc   = $row['tipo_documento'];
			$client_nomb  = $row['nombre_completo'];
			$client_address  = $row['direccion'];
			$client_city  = $row['ciudad'];
			$client_department  = $row['departamento'];
			$client_country  = $row['pais'];
			$client_profesion = $row['profesion'];
			$client_email = $row['email'];
			 
			echo "<tr> \n"; 

			echo "<td>".$client_doc."</td> \n";
			echo "<td>".$client_nomb."</td> \n";
			echo "<td>".$client_address."</td> \n";
			echo "<td>".$client_city."</td> \n";
			echo "<td>".$client_department."</td> \n";
			echo "<td>".$client_country."</td> \n";
			echo "<td>".$client_profesion."</td> \n";
			echo "<td>".$client_email."</td> \n";

			echo "<td>". "<a href='updateClient.php?id=". $client_id ."' title='Update User' data-toggle='tooltip' class='btn btn-primary update'><span class='glyphicon glyphicon-ok-sign'></span></a>";

			echo "<a href=\"#\" remove_id=\"$client_id\" title=\"Delete User\" OnClick=\"return confirm('desea eliminar al usuario con id=$client_id');\" data-toggle=\"tooltip\" class=\"btn btn-danger remove\"><span class=\"glyphicon glyphicon-trash\"></span></a>                   
			</td>";

           
            echo "</tr> \n"; 
		}

		echo "</tbody>";
	    echo "</table> ";
	    echo "</div> ";


	  
	}

}//close


if(isset($_POST["search"])){
		$keyword = $_POST["keyword"];
        $sql = "SELECT * FROM user_info WHERE numero_documento LIKE '%" .$keyword. "%' OR nombre_completo LIKE '%".$keyword."%' OR email LIKE '%".$keyword."%' ";

	
	
	$run_query = mysqli_query($con,$sql);
    if(mysqli_num_rows($run_query) > 0){
  
    	echo "	<div class='table-responsive' style='background-color:white ;''>
							<table class='table table-hover'>
								<thead >
									<tr>
										<th data-field='id' data-align='right'>Documento</th>
										<th data-field='nombre'>Nombre </th>
										<th data-field='direccion'>Direccion</th>
										<th data-field='ciudad'> Ciudad</th>
										<th data-field='departamento'>Departamento</th>
										<th data-field='pais'> Pais</th>
										<th data-field='profesion'>Profesion</th>
										<th data-field='email'> Email</th>
										<th data-field='accion'>Acciòn</th>
									</tr>
								</thead>
								<tbody >";	
   


	while($row=mysqli_fetch_array($run_query)){
		    $client_id    = $row['user_id'];
			$client_doc   = $row['tipo_documento'];
			$client_nomb  = $row['nombre_completo'];
			$client_address  = $row['direccion'];
			$client_city  = $row['ciudad'];
			$client_department  = $row['departamento'];
			$client_country  = $row['pais'];
			$client_profesion = $row['profesion'];
			$client_email = $row['email'];


		 
			echo "<tr> \n"; 

			echo "<td>".$client_doc."</td> \n";
			echo "<td>".$client_nomb."</td> \n";
			echo "<td>".$client_address."</td> \n";
			echo "<td>".$client_city."</td> \n";
			echo "<td>".$client_department."</td> \n";
			echo "<td>".$client_country."</td> \n";
			echo "<td>".$client_profesion."</td> \n";
			echo "<td>".$client_email."</td> \n";

			echo "<td>". "<a href='update.php?id=". $client_id ."' title='Update User' data-toggle='tooltip' class='btn btn-primary update' ><span class='glyphicon glyphicon-ok-sign'></span></a>";

			echo "<a href=\"#\" remove_id=\"$client_id\" title=\"Delete User\" OnClick=\"return confirm('desea eliminar al usuario con id=$client_id');\" data-toggle=\"tooltip\" class=\"btn btn-danger remove\" ><span class=\"glyphicon glyphicon-trash\"></span></a>                   
			</td>";

         

		}
       
		echo "</tbody>";
	    echo "</table> ";
	    echo "</div> ";
	    mysqli_close($con);
	 }//if query >0
	}


if (isset($_POST["removeItemFromUser"])) {
	$remove_id = $_POST["rid"];
		$sql = "DELETE FROM user_info WHERE user_id = '$remove_id' ";
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<a href='list_client.php' class='close' data-dismiss='alert' aria-label='close'>Regresar</a>
						
						<b>Usuario eliminado de la base de datos</b>
				</div>";
		exit();
	}
}







?>






