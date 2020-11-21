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
        array_push($errors, "Pole: Login jest wymagane");
    }
    if (empty($firstName)) {
        array_push($errors, "Pole: Imię jest wymagane");
    }else{
        if(!(preg_match('/^[\s\p{L}]+$/u', $firstName))){
            array_push($errors, "Imię może zawierać tylko litery");
        }
    }
    if (empty($lastName)) {
        array_push($errors, "Pole: Nazwisko jest wymagane");
    }else{
        if(!(preg_match('/^[\s\p{L}]+$/u', $lastName))){
            array_push($errors, "Nazwisko może zawierać tylko litery");
        }
    }
    if (empty($email)) {
        array_push($errors, "Pole: Email jest wymagane");
    }else{
        if(!(preg_match('/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/', $email))){
            array_push($errors, "Niepoprawny format adresu email");
        }
    }
    if (empty($phone)) {
        array_push($errors, "Pole: Numer telefonu jest wymagane");
    }else{
                if(!(preg_match('/^[0-9]{9}+$/', $phone))){
                    array_push($errors, "Niepoprawny format: Numer telefonu");
                }
    }
    if (empty($zipCode)) {
        array_push($errors, "Pole: Kod pocztowy jest wymagane");
    }else{
        if(!(preg_match('/^[0-9]{2}\-[0-9]{3}?$/', $zipCode))){
            array_push($errors, "Niepoprawny format: Kod pocztowy");
        }
//        function isValidZipCode($zipCode) {
//            return (preg_match('/^[0-9]{5}(-[0-9]{4})?$/', $zipCode)) ? true : false;
//        }
    }
    if (empty($town)) {
        array_push($errors, "Pole: Miasto jest wymagane");
    }else{
                if(!(preg_match('/^[\s\p{L}]+$/u', $town))){
                    array_push($errors, "Miasto może zawierać tylko litery");
                }
    }
    if (empty($street)) {
        array_push($errors, "Pole: Ulica jest wymagane");
    }
    if (empty($password)) {
        array_push($errors, "Pole: Hasło jest wymagane");
    }

    if ($password != $passwordConfirm) {
        array_push($errors, "Hasła nie są takie same");
    }

    $result = $db->connect->query("SELECT * FROM user WHERE userName = '$userName' LIMIT 1 ");
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['userName'] === $userName) {
            array_push($errors, "Wybrana nazwa użytkownika jest zajęta");
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


