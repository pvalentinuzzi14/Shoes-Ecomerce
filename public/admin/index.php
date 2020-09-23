<?php
require_once("../../resources/config.php"); 
require_once("../../resources/templates/back/header.php"); 
if(!isset($_SESSION['username'])) //para seguridad del admin code
{
   redireccion("../../public"); 
}

?>
           
                 <?php 
               
                // echo "/PAGINA/public/admin/index.php?user={$_GET['user']}";                 
                 
                 if(($_SERVER['REQUEST_URI'] == "/PAGINA/public/admin/index.php"))
                 {
                    require_once("../../resources/templates/back/adminContent.php"); 

                 }

                 if(isset($_GET['ordenes']))
                 {
                     include(TEMPLATE_BACK."/ordenes.php");
                 }
                 if(isset($_GET['productos']))
                 {
                     include(TEMPLATE_BACK."/productos.php");
                 }
                 if(isset($_GET['add_productos']))
                 {
                     include(TEMPLATE_BACK."/add_productos.php");
                 }
                 if(isset($_GET['edit_productos']))
                 {
                     include(TEMPLATE_BACK."/add_productos.php");
                 }
                 if(isset($_GET['usuarios']))
                 {
                     include(TEMPLATE_BACK."/usuarios.php");
                 }
                 if(isset($_GET['categorias']))
                 {
                     include(TEMPLATE_BACK."/categorias.php");
                 }
                 
                 
                 
                 ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php require_once("../../resources/templates/back/footer.php"); ?>
