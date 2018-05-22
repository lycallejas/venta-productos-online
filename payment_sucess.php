<?php
error_reporting(E_ALL);
	ini_set('display_errors', '1');
session_start();

if(!$_SESSION["rol"] == "cliente"){
	header("location:index.php");
}

$p_st = $_GET["st"];
		$cm_user_id = $_SESSION["uid"];
		$tarjeta = $_GET["tarjeta"];
		$codigo = $_GET["codigo"];
		$fecha = $_GET["date"];




if (isset($_GET["st"])) {

		$p_st = $_GET["st"];
		$cm_user_id = $_SESSION["uid"];
		$tarjeta = $_GET["tarjeta"];
		$codigo = $_GET["codigo"];
		$fecha = $_GET["date"];
        try {
    $now = new DateTime($fecha);
} catch (Exception $e) {
    echo $e->getMessage();
    exit(1);
}
$organizado= $now->format('Y-m-d');
echo $organizado;


 

	if ($p_st == "Completed") {

		include_once("db.php");
	$sql = 'SELECT p_id,qty FROM carro WHERE user_info_user_id ='.$cm_user_id.' ';


   if (!$result=$con->query($sql)) {
    printf("Errormessage1: %s\n", $con->error);
   }
      
    $row_cnt = $result->num_rows;

		if ($row_cnt > 0) {
			# code...
			while ($row=$result->fetch_array(MYSQLI_ASSOC)) {
			$product_id[] = $row["p_id"];
			$qty[] = $row["qty"];
			}

			for ($i=0; $i < count($product_id); $i++) { 
				$sql = "INSERT INTO orden (user_info_user_id,qty,p_status,fechaexpiracion,codigo,numerotarjeta) VALUES ('$cm_user_id','".$qty[$i]."','$p_st','".$organizado."','$codigo','$tarjeta')";
               //				mysqli_query($con,$sql);
                  if (!$con->query($sql)) {
    			printf("Errormessage2: %s\n", $con->error);
   							}

				$idOrden=( int ) $con->insert_id;

                 $sql = "INSERT INTO orden_producto (orden_idorden,producto_info_idproducto) VALUES ('$idOrden','".$product_id[$i]."')";
				//mysqli_query($con,$sql);
                if (!$con->query($sql)) {
    				printf("Errormessage3: %s\n", $con->error);
   					}

			}

			$sql = "DELETE FROM carro WHERE user_info_user_id = '$cm_user_id'";
			if (!$con->query($sql)) {
    				printf("Errormessage4: %s\n", $con->error);
   					}
   					else {//paso correctamente.
				?>
					<!DOCTYPE html>
					<html>
						<head>
							<meta charset="UTF-8">
							<title>Carro compras</title>
							<link rel="stylesheet" href="css/bootstrap.min.css"/>
							<script src="js/jquery2.js"></script>
							<script src="js/bootstrap.min.js"></script>
							<script src="js/main2.js"></script>
							<style>
								table tr td {padding:10px;}
							</style>
						</head>
					<body>
						<div class="navbar navbar-inverse navbar-fixed-top">
							<div class="container-fluid">	
								<div class="navbar-header">
									<a href="#" class="navbar-brand">Carro Compras</a>
								</div>
								<ul class="nav navbar-nav">
									<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
									<li><a href="profile.php"><span class="glyphicon glyphicon-modal-window"></span>Productos</a></li>
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
										<div class="panel-heading"></div>
										<div class="panel-body">
											<h1>Gracias </h1>
											<hr/>
											<p>Hola <?php echo "<b>".$_SESSION["name"]."</b>"; ?>,Tu pago se a registrado correctamente <b><?php 

											$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    					$charactersLength = strlen($characters);
    					$randomString = '';
    				for ($i = 0; $i < 10; $i++) {
      								 $randomString .= $characters[rand(0, $charactersLength - 1)];

                                            }
                                            echo $randomString;
											 ?></b><br/>
											Puedes continuar comprando <br/></p>
											<a href="index.php" class="btn btn-success btn-lg">Continue Comprando</a>
										</div>
										<div class="panel-footer"></div>
									</div>
								</div>
								<div class="col-md-2"></div>
							</div>
						</div>
					</body>
					</html>

				<?php
			}
		}else{
			header("location:index.php");
		}
		
	}
}
?>
