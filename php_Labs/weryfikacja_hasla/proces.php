<?php

session_start();
if ($_POST['rejestracja']) {

$_SESSION['email'] = $_POST['email'];
$_SESSION['password']= $_POST['password'];
$_SESSION['hash'] = password_hash($_SESSION['password'],PASSWORD_DEFAULT);
$info ='Rejestracja wykonana pomyślnie!';
require 'info.php';

}


if ($_POST['logowanie']) {

$email = $_POST['emailL'];
$password = $_POST['passwordL'];
$hash_password = $_SESSION['hash'];

if ($_SESSION['email']== $email && 
	password_verify($password,$hash_password)) {
	
	$info = 'Zostałeś zalogowany!';
	require 'info.php';
}else {
	$info = 'Dane niepoprawne!';
	require 'info.php';
	session_destroy();
}

}



