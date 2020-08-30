<?php 

require_once("../../resources/config.php"); 
require_once("../../resources/templates/back/header.php"); 

?>
               
<div class="col-md-12">
<div class="row">
<h1 class="page-header">
   Ordenes

</h1>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>ID</th>
           <th>Precio</th>
           <th>Estado</th>
      </tr>
    </thead>
    <tbody>
        <?php
            mostrarOrdenes();
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
