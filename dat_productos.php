<?php
error_reporting(E_ALL);
	ini_set('display_errors', '1');


if(isset($_FILES['foto'])){
    $foto=$_FILES["foto"]["name"];
    $ruta=$_FILES["foto"]["tmp_name"];
    $destino="product_images/".$foto;

     
     if(move_uploaded_file($ruta,$destino)){
        chmod("product_images/$foto",0644);
       $exito = 'Imagen cargada exitosamente';
       header("Location:register_product.php?exito=$exito");
    }
    else{
      $error = 'error al cargar la imagen';
      header("Location:register_product.php?error=$error");  
    }

 }

?>