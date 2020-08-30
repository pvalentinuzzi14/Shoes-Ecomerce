<?php require_once("../resources/config.php"); 
    include_once(TEMPLATE_FRONT.DS."header.php");
?>

         <!-- Contact Section -->

        <div class="container">
        <?php  
         include_once(TEMPLATE_FRONT.DS."carrousel.php");
        ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                <?php  send_message(); ?>
                    <h2 class="section-heading">Contactanos</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
           
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="get">
                   
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" name="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name ="telefono" type="tel" class="form-control" placeholder="Telefono" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="mensaje" class="form-control" placeholder="Deja tu mensaje" id="message" required data-validation-required-message="Please enter a message." rows="6"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <input type="submit" class="btn btn-xl"></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>