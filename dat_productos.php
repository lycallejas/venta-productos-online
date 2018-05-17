<?php
ini_set("display_errors", 1);
ini_set("track_errors", 1);
ini_set("html_errors", 1);
error_reporting(E_ALL);
// Include config file
 require_once 'db.php';

if(isset($_POST["referencia"])){
    $foto=$_FILES["foto"]["name"];
    $ruta=$_FILES["foto"]["tmp_name"];
    $destino=( string )"product_images/".$foto;

 $referencia=$_POST["referencia"];
 $empresa=$_POST["empresa"];
 $nombre=$_POST["nombre"];
 $descripcion=$_POST["descripcion"];
 $tipo=$_POST["tipo"];
 $material=$_POST["material"];
 $dimension=$_POST["dimension"];
 $color=$_POST["color"];
 $peso=(double )$_POST["peso"];
 $precio=(double)$_POST["precio"];
 $unidades=(int )$_POST["unidades"];
 $categoria=(int )$_POST["categoria"];



$sql1 = "INSERT INTO Empresa (nombre) 
    VALUES ('$empresa')";


//insertar una empresa correctamente
if($con->query($sql1)){

$idEmpresa=( int ) $con->insert_id;

$sql2 = "INSERT INTO producto_info (referencia, nombre, descripcion,tipo,material, dimension, color,peso,precio,unidades,imagen,categoria_idcategoria,Empresa_idEmpresa) 
  VALUES('$referencia','$nombre','$descripcion','$tipo','$material','$dimension', '$color','$peso','$precio','$unidades','$destino','$categoria','$idEmpresa')";



    if($con->query($sql2)){
  /*
    echo "
      <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>Registro Exitoso Producto </b>
      </div>
    ";
    */
    
    $exitos="Registro Exitoso Producto";
    header("Location:register_product.php?exitos=$exitos");
       mysqli_close($con); 
      
      
    }else{
    $error="No se pudo registrar el  Producto";
    header("Location:register_product.php?error=$error");
       mysqli_close($con); 
    }



if(move_uploaded_file($ruta,$destino)){
        chmod("product_images/$foto",0644);
 }





}else{  //if primera consulta
 $error="No se pudo registrar el  Producto";
    header("Location:register_product.php?error=$error");
       mysqli_close($con); 
}



 }//if validacion
 else{
  echo "string".$_POST["referencia"];
  exit();
 }

?>
