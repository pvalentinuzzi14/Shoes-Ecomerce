<?php 
    require_once("../resources/config.php"); 
  
    include_once(TEMPLATE_FRONT.DS."header.php");

    if(isset($_GET['confirm']))
    {
        $precio = $_SESSION['totalCosto'];
       
        $estado = "Pendiente";

        $query = query("INSERT INTO ordenes (orden_precio,orden_estado) VALUES ('{$precio}','{$estado}')");
        confirmacionquery($query);

        session_destroy();
    }

?>

    <!-- Page Content -->
    <div class="container">
        <h4 class="text-center"> Gracias por su compra ! </h4>


     </div><!--Main Content-->

 <?php include(TEMPLATE_FRONT .  "/footer.php");?>
