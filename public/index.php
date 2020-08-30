<?php require_once("../resources/config.php"); 
    include_once(TEMPLATE_FRONT.DS."header.php");
?>


    <!-- Page Content -->
    <div class="container">
        <div class="row">

            <!--  ACA VAN LAS CATEGORIAS Y EL LOGO  -->
            <?php require_once("../resources/config.php"); 
                include_once(TEMPLATE_FRONT.DS."side_nav.php");
            ?>


            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                     <!--  ACA INSERTA CARROUSEL  -->
                        <?php  
                            include_once(TEMPLATE_FRONT.DS."carrousel.php");
                        ?>  
                    </div>

                </div>

                <div class="row">
                   

                    <?php get_productos(); ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->


<?php
    include_once(TEMPLATE_FRONT.DS."footer.php");
?>