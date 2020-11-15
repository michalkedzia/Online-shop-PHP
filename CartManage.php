<?php
//session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['AddToCart'])) {
        if (isset($_SESSION['cart'])) {
            $contain = false;
            $count = count($_SESSION['cart']);


            foreach ($_SESSION['cart'] as $key => $value) {
                if ($value['procuctName'] == $_POST['procuctName']) {
                    $contain = true;
                    $count = $key;
                }
            }

            if ($contain == true) {
                $_SESSION['cart'][$count]['Quantity'] = $_SESSION['cart'][$count]['Quantity'] + 1;
            } else {
                $items = array_column($_SESSION['cart'], 'procuctName');
                $_SESSION['cart'][$count] = array('idproduct' => $_POST['idproduct'],'procuctName' => $_POST['procuctName'], 'price' => $_POST['price'], 'image' => $_POST['image'], 'Quantity' => 1);
            }


//            $items= array_column($_SESSION['cart'],'procuctName');
//            $count=count($_SESSION['cart']);
//            $_SESSION['cart'][$count] =array('procuctName'=>$_POST['procuctName'],'price'=>$_POST['price'],'image'=>$_POST['image'],'Quantity'=>1);

        } else {
            $_SESSION['cart'][0] = array('idproduct' => $_POST['idproduct'],'procuctName' => $_POST['procuctName'], 'price' => $_POST['price'], 'image' => $_POST['image'], 'Quantity' => 1);
        }
    }


    if (isset($_POST['remove'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['procuctName'] == $_POST['procuctName']) {
                unset($_SESSION['cart'][$key]);
            }

            $_SESSION['cart'] = array_values($_SESSION['cart']);
        }
    }

    if (isset($_POST['update'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['procuctName'] == $_POST['procuctName']) {
                $_SESSION['cart'][$key]['Quantity'] = intval($_POST['num']);
            }
        }
    }


}