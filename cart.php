<?php session_start(); ?>
<?php include('CartManage.php'); ?>
<?php include("header.php"); ?>
<?php include('Order.php'); ?>
<?php include('navbar.php'); ?>

    <section class="pt-5 pb-5">

        <div class="container text-center">
            <?php include('success.php'); ?>
        </div>




        <div class="container">
            <div class="row w-100">
                <div class="col-lg-12 col-md-12 col-12">
                    <h3 class="display-5 mb-2 text-center">Koszyk :</h3>
                    <table id="shoppingCart" class="table table-condensed table-responsive">
                        <thead>
                        <tr>
                            <th style="width:60%">Nazwa</th>
                            <th style="width:12%">Cena</th>
                            <th style="width:10%">Ilośc</th>
                            <th style="width:16%"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php
                            $total = 0;
                            if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) { ?>
                            <?php $total = $total + ($value['price'] * $value['Quantity']); ?>
                        <tr>
                            <td data-th="">
                                <div class="row">
                                    <div class="col-md-3 text-left">
                                        <img src="<?php echo $value['image']; ?>" alt=""
                                             class="img-fluid d-none d-md-block rounded mb-2 shadow ">
                                    </div>
                                    <div class="col-md-9 text-left mt-sm-2">
                                        <h4><?php echo $value['procuctName']; ?></h4>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price"><?php echo $value['price'] . " zł"; ?>

                                <?php
                                $idproduct=$db->prepareData($value['idproduct']);
                                $result = $db->connect->query("SELECT quantity FROM product WHERE idproduct = '$idproduct' ");
                                $result = $result->fetch_row();
                                ?>
                            <form method="post" action="cart.php">
                                <td data-th="Quantity">
                                    <input type="number" name="num" min="1" max="<?php echo $result[0];?>"
                                           class="form-control form-control-lg text-center"
                                           value="<?php echo $value['Quantity']; ?>">
                                </td>
                                <td>
                                    <button name="update" class="btn btn-success">Aktualizuj</button>
                                    <input type="hidden" name="procuctName"
                                           value="<?php echo $value['procuctName']; ?>">
                                </td>
                            </form>
                            <td>
                                <form method="post" action="cart.php">
                                    <button name="remove" class="btn btn-danger">Usun</button>
                                    <input type="hidden" name="procuctName"
                                           value="<?php echo $value['procuctName']; ?>">
                                </form>

                            </td>

                        </tr>
                        <?php }
                        } ?>
                        </tbody>
                    </table>
                    <div class="float-right text-right">
                        <h4>Do zapłaty:</h4>
                        <h1><?php echo $total . " zł"; ?></h1>
                    </div>
                </div>
            </div>
            <div class="row mt-4 d-flex align-items-center">
                <div class="col-sm-6 order-md-2 text-right">
                    <form method="post" action="cart.php">
                        <button name="order" class="btn btn-primary mb-4 btn-lg pl-5 pr-5">Złóż zamówienie</button>
                    </form>
                </div>
                <div class="col-sm-6 mb-3 mb-m-1 order-md-1 text-md-left">
                    <a href="index.php">
                        <i class="fas fa-arrow-left mr-2"></i>Kontynuuj zakupy</a>
                </div>
            </div>
        </div>
    </section>
<?php include("footer.php"); ?>