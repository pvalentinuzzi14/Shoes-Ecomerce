<?php
    
   if(isset($_POST))
   {
       $id = $_POST['prod_id'];
        $titulo = $_POST['prod_titulo'];
        $categoria_id = $_POST['prod_categoria_id'];
        $precio = $_POST['prod_price'];
        $descrip = $_POST['prod_descrip'];
        $image = $_POST['prod_image'];
        $cantidad = $_POST['prod_cantidad'];
    
    
    $conexion = mysqli_connect("localhost","root","") or die("error1");
    @mysqli_select_db($conexion, "ecom_page") or die ("BASE");

   $query = "UPDATE INTO productos (prod_titulo, prod_categoria_id,prod_price,prod_descrip,prod_image,prod_cantidad) VALUES ('{$titulo}', '{$categoria_id}', '{$precio}', '{$descrip}','{$image}', '{$cantidad}') WHERE prod_id='{$id}'";




    $result = mysqli_query($conexion,$query) or die (mysqli_error($conexion));
   
      header("location: ../../../public/admin/index.php?productos");
   }
   

   
?>

