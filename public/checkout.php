<?php 
    require_once("../resources/config.php"); 
  
    include_once(TEMPLATE_FRONT.DS."header.php");


?>

    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
        <h4 class="text-center bg-danger"><?php get_message(); ?></h4>
      <h1>Carrito</h1>

<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Producto</th>
           <th>Precio</th>
           <th>Cantidad</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            
              <?php 

            carrito();
              ?>
              <div class="row">
              
                <div class="col-3"><a href="gracias.php?confirm" class="btn btn-success">Comprar</a></div>

              </div>


        </tbody>
    </table>
</form>
 </div><!--Main Content-->

 <?php include(TEMPLATE_FRONT .  "/footer.php");?>
