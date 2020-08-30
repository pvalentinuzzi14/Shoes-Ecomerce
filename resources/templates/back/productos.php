<?php 

require_once("../../resources/config.php"); 
require_once("../../resources/templates/back/header.php"); 

?>
<h1 class="page-header">
   Productos

</h1>
<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>Titulo</th>
           <th>Categoria</th>
           <th>Precio</th>
           <th>Descripcion</th>
           <th>Cantidad</th>
           <th>Remover</th>



      </tr>
    </thead>
    <tbody>
      <?php
        mostrarproductos();
      ?>


  </tbody>
</table>











                
                 


             </div>

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
