<?php

$successes = array();

if (isset($_POST['order']) and isset($_SESSION['cart'])) {
    $successes = array();
    if ((count($_SESSION['cart']) > 0)) {
        $iduser = $db->prepareData($_SESSION['iduser']); //
        $username = $_SESSION['username'];

        $db->connect->query("INSERT INTO userorder (user_iduser,userName) VALUES ('$iduser','$username')");
        $id = mysqli_insert_id($db->connect);
        $db->connect->query("INSERT INTO status (userOrder_iduserOrder, status) VALUES ('$id','Zlozone przez uzytkownika')");


        foreach ($_SESSION['cart'] as $key => $value) {

            $idproduct = $db->prepareData($value['idproduct']);
            $quantity = $db->prepareData($value['Quantity']);
            $productName = $db->prepareData($value['procuctName']);

            $db->connect->query("INSERT INTO shop.order (product_idproduct,userOrder_iduserOrder,quantity,productName) VALUES ('$idproduct' ,'$id','$quantity','$productName')");
            $quantity_database = $db->connect->query("select quantity from product where idproduct = '$idproduct'");
            $quantity_database = $quantity_database->fetch_row();
            $quantity = $quantity_database[0] - $quantity;
            $db->connect->query("update product set quantity = '$quantity' where idproduct = '$idproduct';");

            unset($_SESSION['cart'][$key]);
        }

        array_push($successes, "Zamowineie zrealizowane");

    }
}