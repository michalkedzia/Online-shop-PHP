<?php

$successes = array();

if (isset($_POST['order']) and isset($_SESSION['cart'])) {
    $successes = array();
    if ((count($_SESSION['cart']) > 0)) {
//        $iduser = $db->prepareData($_SESSION['iduser']);
//        $db->connect->query("INSERT INTO userorder (user_iduser) VALUES ('$iduser')");
//        $id = mysqli_insert_id($db->connect);
//        $db->connect->query("INSERT INTO status (userOrder_iduserOrder, status) VALUES ('$id','Zlozone przez uzytkownika')");

        foreach ($_SESSION['cart'] as $key => $value) {
//            $idproduct = $db->prepareData($value['idproduct']);
//            $quantity = $db->prepareData($value['Quantity']);;
//            $db->connect->query("INSERT INTO shop.order (product_idproduct,userOrder_iduserOrder,quantity) VALUES ('$idproduct' ,'$id','$quantity')");
            unset($_SESSION['cart'][$key]);
        }

        array_push($successes, "Zamowineie zrealizowane");
    }
}