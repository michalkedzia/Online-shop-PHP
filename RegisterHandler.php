<?php

$errors = array();
$successes = array();

if (isset($_POST['register'])) {
    $errors = array();
    $successes = array();
    $firstName = $db->prepareData(isset($_POST['first_name']) ? $_POST['first_name'] : '');
    $lastName = $db->prepareData(isset($_POST['last_name']) ? $_POST['last_name'] : '');
    $email = $db->prepareData(isset($_POST['email']) ? $_POST['email'] : '');
    $userName = $db->prepareData(isset($_POST['username']) ? $_POST['username'] : '');
    $phone = $db->prepareData(isset($_POST['phone_number']) ? $_POST['phone_number'] : '');
    $zipCode = $db->prepareData(isset($_POST['zip_code']) ? $_POST['zip_code'] : '');
    $town = $db->prepareData(isset($_POST['town']) ? $_POST['town'] : '');
    $street = $db->prepareData(isset($_POST['street']) ? $_POST['street'] : '');
    $password = $db->prepareData(isset($_POST['password']) ? $_POST['password'] : '');
    $passwordConfirm = $db->prepareData(isset($_POST['password_confirmation']) ? $_POST['password_confirmation'] : '');

    if (empty($userName)) {
        array_push($errors, "Username is required");
    }
    if (empty($firstName)) {
        array_push($errors, "First name is required");
    }
    if (empty($lastName)) {
        array_push($errors, "Last name is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }else{
        if(!(preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $email))){
            array_push($errors, "niepoprwaby email");
        }else array_push($errors, "poprwaby email");
    }
    if (empty($phone)) {
        array_push($errors, "Phone is required");
    }
    if (empty($zipCode)) {
        array_push($errors, "Zip code is required");
    }else{
        if(!(preg_match('/^[0-9]{2}\-[0-9]{3}?$/', $zipCode))){
            array_push($errors, "niepoprwaby zip code");
        }
//        function isValidZipCode($zipCode) {
//            return (preg_match('/^[0-9]{5}(-[0-9]{4})?$/', $zipCode)) ? true : false;
//        }
    }
    if (empty($town)) {
        array_push($errors, "Town is required");
    }
    if (empty($street)) {
        array_push($errors, "Street is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if ($password != $passwordConfirm) {
        array_push($errors, "Password not match");
    }

    $result = $db->connect->query("SELECT * FROM user WHERE userName = '$userName' LIMIT 1 ");
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['userName'] === $userName) {
            array_push($errors, "Username already exist");
        }
    }

    if (count($errors) == 0) {
        $pass = md5($password);
        $db->connect->query("INSERT INTO user (firstName, lastName,userName,password) VALUES ('$firstName' ,'$lastName','$userName','$pass')");

        $id = mysqli_insert_id($db->connect);

        $db->connect->query("INSERT INTO contact (user_iduser, email,phoneNumber) VALUES ('$id' ,'$email','$phone')");
        $db->connect->query("INSERT INTO address (zipCode, street,town,user_iduser) VALUES ('$zipCode' ,'$street','$town','$id')");

        array_push($successes, "Sukces");
    }
}


