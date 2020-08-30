<?php require_once("../resources/config.php"); 
    include_once(TEMPLATE_FRONT.DS."header.php");
    require_once("../resources/config.php"); 
    
    

    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1 class="text-center">Nuestros Productos</h1>
            
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>PRODUCTOS DESTACADOS </h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

        <?php get_productos(); ?>

        </div>
        
      
    </div>
    <!-- /.container -->

    <?php
    include_once(TEMPLATE_FRONT.DS."footer.php");
    ?>

