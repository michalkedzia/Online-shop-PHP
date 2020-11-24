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
        <div class="row w-100">
            <div class="col-lg-12 col-md-12 col-12">
                <h3 class="display-5 mb-2 text-center">Historia twoich zamówień:</h3>
                <div class="list-group">


                    <?php $username = $_SESSION['username']; ?>
                    <?php $result = $db->connect->query("SELECT * FROM userorder WHERE userName = '$username'"); ?>

                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>

                            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Id zamówienia: <?php echo $row['iduserOrder']; ?> </h5>
                                    <strong class="text-muted">Całkowity
                                        koszt: <?php echo $row['totalCost'] . " zł"; ?></strong>
                                </div>

                                <?php $id = $row["iduserOrder"];
                                $products = $db->connect->query("SELECT * FROM shop.order WHERE userOrder_iduserOrder = '$id'");
                                if ($products->num_rows > 0) {
                                    while ($prod = $products->fetch_assoc()) { ?>
                                        <p class="mb-1">Produkt: <?php echo $prod['productName']; ?>
                                            <strong><?php echo "  Ilosć:" . $prod['quantity']; ?></strong></p>
                                    <?php }
                                } ?>
                                <small>Status: Zlozone przez uzytkownika.</small>
                            </a>
                        <?php }
                    } ?>

                </div>
            </div>
        </div>
    </div>
    </div>


<?php include("footer.php"); ?>