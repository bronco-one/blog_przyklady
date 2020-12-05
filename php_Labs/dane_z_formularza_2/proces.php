<?php
$dane = [];

if ($_POST['name'] != '') {

    $dane['Imię'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
} else {
    $dane['Imię'] = 'nie wstawiono wartości';
}
if ($_POST['surname'] != '') {

    $dane['Nazwisko'] = filter_var($_POST['surname'], FILTER_SANITIZE_STRING);
} else {
    $dane['Nazwisko'] = 'nie wstawiono wartości';
}
if ($_POST['email'] != '') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $dane['E-mail'] = $email;
    } else {
        $dane['E-mail'] = 'format jest niepoprawny';
    }
} else {
    $dane['E-mail'] = 'nie wstawiono wartości';
}
if ($_POST['phone'] != '') {

    $dane['Telefon'] = filter_var($_POST['phone'], FILTER_VALIDATE_INT);
} else {
    $dane['Telefon'] = 'nie wstawiono wartości';
}
if ($_POST['password1'] != '') {

    $dane['Hasło'] = filter_var($_POST['password1'], FILTER_SANITIZE_STRING);
} else {
    $dane['Hasło'] = 'nie wstawiono wartości';
}
if ($_POST['password2'] != '') {
	
    $password2 = filter_var($_POST['password2'], FILTER_SANITIZE_STRING);
    if ($dane['Hasło'] == $password2) {
        $dane['Info'] = 'Hasło ustawiono poprawnie';
    } else {
        $dane['Info'] = 'Hasła nie pasują do siebie';
    }
    $dane['Imię'] = $_POST['name'];
} else {
    $dane['Hasło2'] = 'nie wstawiono wartości';
}
require 'dane.php';
