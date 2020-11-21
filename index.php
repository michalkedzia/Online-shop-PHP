<?php
session_start();

if (!isset($_SESSION['iduser'])) {
    echo "asd";
    header("Location: login.php");
}

if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
}
?>

<?php include('CartManage.php'); ?>
<?php include("header.php"); ?>
<?php include('navbar.php'); ?>


    <div class="container">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="my-4">Kategorie</h1>

                <div class="filter" >
                    <div class="list-group"  >
                        <button data-name='*' class="list-group-item" style="background-color: #9B9D9F">Wszystkie</button>
                        <?php $result = $db->getData("category"); ?>
                        <?php foreach ($result as $category) { ?>
                            <button data-name=".<?php echo $category["categoryName"]; ?>"
                                    style="background-color: #9B9D9F" class="list-group-item">  <?php echo $category["categoryName"]; ?>  </button>
                        <?php } ?>
                    </div>
                </div>
            </div>

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


                <div class="row grid">
                    <?php $result = $db->getData("product"); ?>
                    <?php foreach ($result as $product) { ?>
                        <?php $idcat = $db->prepareData($product["category_idcategory"]); ?>
                        <?php $r = $db->connect->query("SELECT categoryName FROM category WHERE idcategory = '$idcat'") ?>
                        <?php $row = $r->fetch_row(); ?>
                        <div class="col-lg-4 col-md-6 mb-4 grid-item <?php echo $row[0]; ?>">
                            <form method="post" action="index.php">
                                <div class="card h-100" style="background-color: #9B9D9F">
                                    <a href="#"><img class="card-img-top"
                                                     src="<?php echo "images/" . $product["srcImg"]; ?>" alt=""
                                                     height="250"></a>
                                    <div class="card-body"  >
                                        <h4 class="card-title">
                                            <p><strong><?php echo $product['productName']; ?></strong></p>
                                        </h4>
                                        <h5>Cena: <?php echo $product['price'] . " zł"; ?></h5>
<!--                                        <h4 class="card-title">-->
<!--                                            <a href="#">--><?php //echo $product['productName']; ?><!--</a>-->
<!--                                        </h4>-->
<!--                                        <h5>Cena: --><?php //echo $product['price'] . " zł"; ?><!--</h5>-->
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Amet
                                            numquam aspernatur!</p>
                                        <h6>Dostępna ilosc: <?php echo $product['quantity']; ?></h6>
                                        <input type="hidden" value="<?php echo $product['productName']; ?>"
                                               name="procuctName">
                                        <input type="hidden" value="<?php echo $product['price']; ?>" name="price">
                                        <input type="hidden" value="<?php echo $product['idproduct']; ?>"
                                               name="idproduct">
                                        <input type="hidden" value="<?php echo "images/" . $product["srcImg"]; ?>"
                                               name="image">
                                        <button type="submit" name="AddToCart" class="btn btn-info" <?php if($product['quantity']==0){echo "disabled";}?>>Dodaj do koszyka</button>

                                    </div>
                                </div>

                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php"); ?>