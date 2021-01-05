<?php
session_start();

//if (!isset($_SESSION['iduser'])) {
//    header("Location: login.php");
//}



if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: login.php");
}
?>

<?php include('CartManage.php'); ?>
<?php include("header.php"); ?>
<?php include('navbar.php'); ?>


    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="images/logo1.PNG" width="100%" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="images/logo2.PNG" width="100%" alt="Second slide">
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


    <div class="container ">
        <div class="filter">
            <div class="list-group list-group-horizontal justify-content-center flex-fill">
                <button data-name='*' class="list-group-item" style=" background-color: #555555;
                            color: white;
                            border: 2px solid #e7e7e7;">Wszystkie
                </button>
                <?php $result = $db->getData("category"); ?>
                <?php foreach ($result as $category) { ?>
                    <button data-name=".<?php echo $category["categoryName"]; ?>"
                            style=" background-color: #555555;
                            color: white;
                            border: 2px solid #e7e7e7;"
                            class="list-group-item flex-fill">  <?php echo $category["categoryName"]; ?>  </button>
                <?php } ?>
            </div>
        </div>

        <hr class="my-auto-6">


        <!--<div class="c"></div>-->

        <div class="row grid ">
            <?php $result = $db->getData("product"); ?>
            <?php foreach ($result as $product) { ?>
                <?php $idcat = $db->prepareData($product["category_idcategory"]); ?>
                <?php $r = $db->connect->query("SELECT categoryName FROM category WHERE idcategory = '$idcat'") ?>
                <?php $row = $r->fetch_row(); ?>
                <div class="col-sm-6 col-md-3   grid-item <?php echo $row[0]; ?>">
                    <form method="post" action="index.php">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top"
                                             src="<?php echo "images/" . $product["srcImg"]; ?>" alt=""
                                             height="250"></a>
                            <div class="card-body" >
                                <h4 class="card-title" style="height: 50px">
                                    <p><strong><?php echo $product['productName']; ?></strong></p>
                                </h4>
                                <h5>Cena: <?php echo $product['price'] . " zł"; ?></h5>
                                <p class="card-text" style="height: 300px"><?php echo nl2br($product["description"]); ?></p>
                                <h6>Dostępna ilosc: <?php echo $product['quantity']; ?></h6>
                                <input type="hidden" value="<?php echo $product['productName']; ?>"
                                       name="procuctName">
                                <input type="hidden" value="<?php echo $product['price']; ?>" name="price">
                                <input type="hidden" value="<?php echo $product['idproduct']; ?>"
                                       name="idproduct">
                                <input type="hidden" value="<?php echo "images/" . $product["srcImg"]; ?>"
                                       name="image">
                                <button type="submit" name="AddToCart"
                                        class="btn btn-info" <?php if ($product['quantity'] == 0) {
                                    echo "disabled";
                                } ?> <?php if(!isset($_SESSION['iduser'])) echo "disabled";?>>Dodaj do koszyka
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            <?php } ?>
        </div>


    </div>


<?php include("footer.php"); ?>