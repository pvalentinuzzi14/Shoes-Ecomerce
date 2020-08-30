<?php
    

   if(isset($_GET['id']))
   {

    $conexion = mysqli_connect("localhost","root","") or die("error1");
    @mysqli_select_db($conexion, "ecom_page") or die ("BASE");
    $query = "DELETE FROM productos WHERE prod_id=".($_GET['id']);
    $result = mysqli_query($conexion,$query) or die (mysqli_error($conexion));
   
      header("location: ../../../public/admin/index.php?productos");
   }
   

   
?>