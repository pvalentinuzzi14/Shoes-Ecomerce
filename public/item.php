<?php require_once("../resources/config.php"); 
    include_once(TEMPLATE_FRONT.DS."header.php");
?>
    <!-- Page Content -->
<div class="container">

    <!--  ACA VAN LAS CATEGORIAS Y EL LOGO  -->
    <?php require_once("../resources/config.php"); 
      include_once(TEMPLATE_FRONT.DS."side_nav.php");
           
     $query = query("SELECT * FROM productos WHERE prod_id =".escape($_GET['id']));
     confirmacionquery($query);
     while($row = mysqli_fetch_array($query)):
     ?>


    <div class="col-md-9">

        <!--Row For Image and Short Description-->

        <div class="row">

            <div class="col-md-7">
            <img class="img-responsive" src="<?php echo $row['prod_image']; ?>" alt="img-product">

            </div>

            <div class="col-md-5">

                <div class="thumbnail">
                

            <div class="caption-full">
                <h4><?php echo $row['prod_titulo']?> </h4>
                <hr>
                <h4 class=""><?php echo "&#36; ".$row['prod_price']; ?></h4>

            <div class="ratings">
            
                <p>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star-empty"></span>
                    4.0 stars
                </p>
            </div>
                        
            <form action="">
                <div class="form-group">
                    <a class='btn btn-success' target='_self' href='../resources/carrito.php?add=<?php echo $row ['prod_id']; ?>'>Comprar ahora</a>

                   <!-- <a class='btn btn-success p-3' target='_self' href=''>Comprar ahora</a> -->
                </div>
            </form>

            </div>
        
        </div>

        </div>


        </div><!--Row For Image and Short Description-->


                <hr>


        <!--Row for Tab Panel-->

        <div class="row">

        <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#descrip" aria-controls="descrip" role="tab" data-toggle="tab">Descripcion</a></li>
            <li role="presentation"><a href="#opiniones" aria-controls="opiniones" role="tab" data-toggle="tab">Opiniones</a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="descrip">

        <p></p>
                
            <?php echo $row['prod_descrip']; ?>
            </div>
            <div role="tabpanel" class="tab-pane" id="opiniones">

        <div class="col-md-6">

            <h3>2 RESEÑAS </h3>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">10 days ago</span>
                        <p>This product was great in terms of quality. I would definitely buy another!</p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">12 days ago</span>
                        <p>I've alredy ordered another one!</p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        Anonymous
                        <span class="pull-right">15 days ago</span>
                        <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                    </div>
                </div>

            </div>


            <div class="col-md-6">
                <h3>Add A review</h3>

            <form action="" class="form-inline">
                <div class="form-group">
                    <label for="">Name</label>
                        <input type="text" class="form-control" >
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                        <input type="test" class="form-control">
                    </div>

                <div>
                    <h3>Your Rating</h3>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                    <span class="glyphicon glyphicon-star"></span>
                </div>

                    <br>
                    
                    <div class="form-group">
                    <textarea name="" id="" cols="60" rows="10" class="form-control"></textarea>
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="SUBMIT">
                    </div>
                </form>

            </div>

        </div>

        </div>

        </div>


        </div><!--Row for Tab Panel-->



    </div>

    <?php endwhile; ?>

</div>


    <?php
    include_once(TEMPLATE_FRONT.DS."footer.php");
    ?>
