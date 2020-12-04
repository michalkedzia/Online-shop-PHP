<?php
session_start();

if (!isset($_SESSION['id'])) {
    echo "asd";
    header("Location: admin.php");
}


if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
    header("Location: admin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<?php
require('functions.php');

if (isset($_POST['status'])) {
    $status = $_POST['status'];
    $id = $_POST['update_status'];
    $result = $db->connect->query("UPDATE status SET status = '$status' WHERE userOrder_iduserOrder = '$id'");
}

if (isset($_POST['add_product'])) {

    if(isset($_POST['category'])){
        $cat = $_POST['category'];
        $category_id = $db->connect->query("select idcategory from category where categoryName = '$cat';");
        $category_id =$category_id->fetch_assoc();
        $category_id = $category_id['idcategory'];

        $productName = $_POST['product_name'];
        $price= $_POST['price'];
        $quantity= $_POST['quantity'];
        $srcImg= $_POST['fileToUpload'];
        $description= $_POST['product_description'];
        $result = $db->connect->query("insert into product(category_idcategory,productName,price,quantity,srcImg,description) values ('$category_id','$productName','$price','$quantity','$srcImg','$description');");
    }



}



?>


<style>
    ul, #myUL {
        list-style-type: none;
    }

    #myUL {
        margin: 0;
        padding: 0;
    }

    .caret {
        cursor: pointer;
        -webkit-user-select: none; /* Safari 3.1+ */
        -moz-user-select: none; /* Firefox 2+ */
        -ms-user-select: none; /* IE 10+ */
        user-select: none;
    }

    .caret::before {
        content: "\25B6";
        color: black;
        display: inline-block;
        margin-right: 6px;
    }

    .caret-down::before {
        -ms-transform: rotate(90deg); /* IE 9 */
        -webkit-transform: rotate(90deg); /* Safari */
    ' transform: rotate(90 deg);
    }

    .nested {
        display: none;
    }

    .active {
        display: block;
    }
</style>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>


    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="MDB/css/addons/datatables.min.css" rel="stylesheet">


</head>

<body>





<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Opcje</div>
        <div class="list-group list-group-flush">


            <form method="post" action="">
                <button href="#" class="list-group-item list-group-item-action bg-light">Zamówienia</button>
                <input type="hidden" name="orders">
            </form>


            <form method="post" action="">
                <button href="#" class="list-group-item list-group-item-action bg-light">Dodaj produkt</button>
                <input type="hidden" name="add_product">
            </form>

            <form method="post" action="">
                <button href="#" class="list-group-item list-group-item-action bg-light">Produkty</button>
                <input type="hidden" name="products">
            </form>


        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
<!--            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="AdminPanel.php?logout='1'">Wyloguj</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">


            <?php if (isset($_POST['orders'])) { ?>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id zamówienia</th>
                        <th scope="col">Nazwa użytkownika</th>
                        <th scope="col">Całkowity koszt</th>
                        <th scope="col">Zamówione produkty</th>
                        <th scope="col">Aktualny status</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $result = $db->connect->query("SELECT * FROM userorder"); ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <?php $id = $row["iduserOrder"]; ?>
                        <tr>
                            <th scope="row"><?php echo $row["iduserOrder"]; ?></th>
                            <td><?php echo $row["userName"]; ?></td>
                            <td><?php echo $row["totalCost"]; ?></td>
                            <td>
                                <ul id="myUL">
                                    <li><span class="caret">Szczegóły</span>
                                        <ul class="nested">
                                            <?php $products = $db->connect->query("SELECT * FROM shop.order WHERE userOrder_iduserOrder = $id "); ?>
                                            <?php while ($p = $products->fetch_assoc()) { ?>
                                                <li><?php echo $p['quantity'] . " x " . $p['productName'] . "<br>"; ?></li>
                                            <?php }; ?>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <?php $status = $db->connect->query("SELECT * FROM status where userOrder_iduserOrder = $id");
                            $status = $status->fetch_assoc();
                            ?>
                            <td><?php echo $status['status']; ?></td>
                            <td>

                                <form method="post" action="">
                                    <select name="status">
                                        <option value="" disabled selected>Zmień status</option>
                                        <option value="Przygotowane do wysłania">Przygotowane do wysłania</option>
                                        <option value="Wysłane">Wysłane</option>
                                        <option value="Kompletowanie zamówienia">Kompletowanie zamówienia</option>
                                    </select>
                                    <button name="update_status" value="<?php echo $id; ?>" class="btn btn-primary">
                                        Zmień
                                    </button>
                                    <input type="hidden" name="orders">
                                </form>

                            </td>
                        </tr>
                    <?php }; ?>


                    </tbody>
                </table>
            <?php } ?>

            <?php if (isset($_POST['add_product'])) { ?>

                <div class="row">
                    <!--                    <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">-->
                    <!--                        <h1 class="mb-5">This is a title-->
                    <!--                        </h1>-->
                    <!--                        <p class="mb-5">Lorem ipsum</p>-->
                    <!--                        <a href="#">Click me</a>-->
                    <!--                    </div>-->
                    <div class="col-md-12 d-flex flex-column ">
                        <div class="my-auto mx-auto w-50" >
                            <form class="form-horizontal" method="post" action="" >
                                <fieldset>

                                    <div class="form-group">
                                        <label class="control-label">Nazwa produktu</label>
                                        <input id="product_name" name="product_name" placeholder="Nazwa produktu"
                                               class="form-control input-md" required="" type="text">
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label">Cena</label>
                                        <input id="price" name="price" placeholder="Cena"
                                               class="form-control input-md" required="" type="number" step="0.01">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Ilość</label>
                                        <input id="quantity" name="quantity" placeholder="Ilość"
                                               class="form-control input-md" required="" type="number" min="1">
                                    </div>


                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="control-label" for="product_categorie">Kategoria</label>
                                        <select id="category" name="category" class="form-control">

                                            <?php $result = $db->connect->query("SELECT * FROM category"); ?>
                                            <?php while ($row = $result->fetch_assoc()) { ?>

                                                <option value="<?php echo $row['categoryName'];?>"><?php echo $row['categoryName'];?></option>
                                            <?php }?>



                                        </select>

                                    </div>


                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class=" control-label" for="product_description">Opis</label>
                                        <textarea class="form-control" id="product_description"
                                                  name="product_description"></textarea>
                                    </div>
<!--                                    $_POST['fileToUpload']-->


                                    <div class="form-group">
                                        <input type="file" name="fileToUpload" id="fileToUpload" >
                                    </div>



                                    <!-- Button -->
                                    <div class="form-group">
                                        <button id="add_product" name="add_product" class="btn btn-primary">Dodaj
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php if (isset($_POST['products'])) { ?>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Id produktu</th>
                        <th scope="col">Nazwa produktu</th>
                        <th scope="col">Cena</th>
                        <th scope="col">Ilość</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $result = $db->connect->query("select * from product"); ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <th scope="row"><?php echo $row["idproduct"]; ?></th>
                            <td><?php echo $row["productName"]; ?></td>
                            <td><?php echo $row["price"] . " zł"; ?></td>
                            <td><?php echo $row['quantity']; ?></td>

                        </tr>
                    <?php }; ?>


                    </tbody>
                </table>
            <?php } ?>


        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="MDB/js/addons/datatables.min.js"></script>
<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function () {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }

</script>

</body>

</html>