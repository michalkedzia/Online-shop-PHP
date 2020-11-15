<?php
//session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['AddToCart'])) {
        if (isset($_SESSION['cart'])) {
            $items= array_column($_SESSION['cart'],'procuctName');

            if(in_array($_POST['procuctName'],$items)){
               //
            }

            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count] =array('procuctName'=>$_POST['procuctName'],'price'=>$_POST['price'],'image'=>$_POST['image'],'Quantity'=>1);

        } else {
            $_SESSION['cart'][0] = array('procuctName'=>$_POST['procuctName'],'price'=>$_POST['price'],'image'=>$_POST['image'],'Quantity'=>1);

        }
    }


    if(isset($_POST['remove'])){
        foreach ($_SESSION['cart'] as $key=> $value){
            if($value['procuctName'] == $_POST['procuctName'])
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
        }
    }

}