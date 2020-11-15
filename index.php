<?php
session_start();

if(!isset($_SESSION['iduser'])){
    echo "asd";
    header("Location: login.php");
}

if(isset($_GET['logout'])){
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
}

?>

<?php include ('CartManage.php');?>


<?php include("header.php"); ?>
<?php include ('navbar.php');?>


<!--    --><?php //$productt = $db->getData("category");?>
<!---->
<?php //array_map(function ($item){
//echo ($item['categoryName']);
//},$productt)?>






    <div class="container">

        <div class="row">

            <div class="col-lg-3">

                <h1 class="my-4">Kategorie</h1>
                <div class="list-group">
                    <?php $result =$db->getData("category"); ?>
                    <?php foreach ($result as $category) { ?>
                        <a href="#" class="list-group-item">  <?php echo $category["categoryName"]; ?>  </a>
                    <?php } ?>
                </div>

            </div>
            <!-- /.col-lg-3 -->



            <div class="col-lg-9">

                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block img-fluid" src="images/logo1.PNG" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block img-fluid" src="images/logo2.PNG" alt="Second slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>



                <div class="row">

                    <?php $result = $db->getData("product"); ?>

                    <?php foreach ($result as $product) { ?>
                        <div class="col-lg-4 col-md-6 mb-4" >
                            <form method="post" action="index.php">
                                <div class="card h-100" style="background: rgb(59,68,60);">
                                    <a href="#"><img class="card-img-top" src="<?php echo "images/" . $product["srcImg"] ;?>"  alt="" height="250" ></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#"><?php echo $product['productName'];?></a>
                                        </h4>
                                        <h5><?php echo $product['price'] . " zł";?></h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet
                                            numquam aspernatur!</p>

                                        <input type="hidden" value="<?php echo $product['productName'];?>" name="procuctName" >
                                        <input type="hidden" value="<?php echo $product['price'];?>" name="price" >
                                        <input type="hidden" value="<?php echo $product['idproduct'];?>" name="idproduct" >
                                        <input type="hidden" value="<?php echo "images/" . $product["srcImg"] ;?>" name="image" >
                                        <button type="submit" name="AddToCart" class="btn btn-info">Add to cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <?php } ?>


                    <!--                dddddddd-->

<!---->
<!--                    <div class="col-lg-4 col-md-6 mb-4">-->
<!--                        <div class="card h-100">-->
<!--                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--                            <div class="card-body">-->
<!--                                <h4 class="card-title">-->
<!--                                    <a href="#">Item One</a>-->
<!--                                </h4>-->
<!--                                <h5>$24.99</h5>-->
<!--                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                                    numquam aspernatur!</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-6 mb-4">-->
<!--                        <div class="card h-100">-->
<!--                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--                            <div class="card-body">-->
<!--                                <h4 class="card-title">-->
<!--                                    <a href="#">Item Two</a>-->
<!--                                </h4>-->
<!--                                <h5>$24.99</h5>-->
<!--                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                                    numquam aspernatur! Lorem ipsum dolor sit amet.</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-6 mb-4">-->
<!--                        <div class="card h-100">-->
<!--                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--                            <div class="card-body">-->
<!--                                <h4 class="card-title">-->
<!--                                    <a href="#">Item Three</a>-->
<!--                                </h4>-->
<!--                                <h5>$24.99</h5>-->
<!--                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                                    numquam aspernatur!</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <button class="btn btn-primary" type="submit">Kup</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-6 mb-4">-->
<!--                        <div class="card h-100">-->
<!--                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--                            <div class="card-body">-->
<!--                                <h4 class="card-title">-->
<!--                                    <a href="#">Item Four</a>-->
<!--                                </h4>-->
<!--                                <h5>$24.99</h5>-->
<!--                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                                    numquam aspernatur!</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-6 mb-4">-->
<!--                        <div class="card h-100">-->
<!--                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--                            <div class="card-body">-->
<!--                                <h4 class="card-title">-->
<!--                                    <a href="#">Item Five</a>-->
<!--                                </h4>-->
<!--                                <h5>$24.99</h5>-->
<!--                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                                    numquam aspernatur! Lorem ipsum dolor sit amet.</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="col-lg-4 col-md-6 mb-4">-->
<!--                        <div class="card h-100">-->
<!--                            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
<!--                            <div class="card-body">-->
<!--                                <h4 class="card-title">-->
<!--                                    <a href="#">Item Six</a>-->
<!--                                </h4>-->
<!--                                <h5>$24.99</h5>-->
<!--                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet-->
<!--                                    numquam aspernatur!</p>-->
<!--                            </div>-->
<!--                            <div class="card-footer">-->
<!--                                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </>
    <!-- /.container -->

<?php include("footer.php"); ?>