<?php require_once("../resources/config.php"); 
    include_once(TEMPLATE_FRONT.DS."header.php");
?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            

        <div class="col-sm text-center">         
            <form class="" action="" method="post">
            
            <h4 class="text-center bg-danger"><?php get_message(); ?></h4>
            <?php login_user(); ?>
            
                <div class="form-group"><label for="usuario">
                    Usuario<input type="text" name="usuario" class="form-control"></label>
                  
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control"></label>
                </div>
              

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->

    <?php
    include_once(TEMPLATE_FRONT.DS."footer.php");
?>