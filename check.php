<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
$login = filter_var(trim($_POST['login']));
$name = filter_var(trim($_POST['name']));
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_EMAIL);
$password = filter_var(trim($_POST['password']));


$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');

$mysql->query("INSERT INTO `Данные Клиента` (`логин`, `Имя`, `Электронная почта`, `пароль`)
VALUES('$login', '$name', '$email', '$password')" );
$mysql->close();
header('Location: /');
?>