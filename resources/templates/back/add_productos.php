<?php 

require_once("../../resources/config.php"); 
require_once("../../resources/templates/back/header.php"); 

?>



<div class="col-md-12">

  <div class="row">
  <h1 class="page-header">
    Agregar Productos
  </h1>
  </div>
               


  <form action="http://localhost/PAGINA/resources/templates/back/agregar_producto.php" method="post">


  <div class="col-md-8">

  <div class="form-group">
      <label for="product-title">Titulo </label>
          <input type="text" name="prod_titulo" class="form-control">
        
      </div>

      <div class="form-group row " display-inline>

        <div class="col-xs-3">
            <label for="product-price">Product Price</label>
            <input type="number" name="prod_price" class="form-control" size="60">
          </div>
          <div class="col-xs-3">
            <label for="product-price">URL Image</label>
            <input type="text" name="prod_image" class="form-control" size="60">
          </div>
          <div class="col-xs-3">
            <label for="product-price">Categoria_id</label>
            <input type="number" name="prod_categoria_id" class="form-control" size="60">
          </div>
          <div class="col-xs-3">
            <label for="product-price">Cantidad</label>
            <input type="number" name="prod_cantidad" class="form-control" size="60">
          </div>
        </div>

        <div class="form-group">
            <label for="product-title">Descripcion</label>
        <textarea name="prod_descrip" id="" cols="30" rows="6" class="form-control"></textarea>
      </div>
        <div class="form-group row">

      

        <input type="submit" name="submit" class="btn btn-success">


      

      
        
      </div>




      
      

  </div><!--Main Content-->

      
  </form>



                



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
