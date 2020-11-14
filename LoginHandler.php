<?php

$errors = array();
$successes = array();

if (isset($_POST['login'])) {

    $userName = $db->prepareData(isset($_POST['username']) ? $_POST['username'] : '');
    $password = $db->prepareData(isset($_POST['password']) ? $_POST['password'] : '');

    if (empty($userName)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }


    if (count($errors) == 0) {
        $pass = md5($password);

        $result = $db->connect->query("SELECT * FROM user WHERE userName = '$userName' and password = '$pass' LIMIT 1 ");
        $id = $db->connect->query("SELECT iduser FROM user WHERE userName = '$userName' LIMIT 1");

        if (mysqli_num_rows($result) == 1) {
            session_start();

            $row = $id->fetch_assoc();
            $_SESSION['iduser'] = $row['iduser'];
            $_SESSION['username'] = $userName;
            array_push($successes, "Sukces");
            header("Location: index.php");
        } else {
            array_push($errors, "Login lub hasło nieprawidłowe");
        }


    }

}


