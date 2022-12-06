<?php

$login = filter_var(trim($_POST['login']));
$name = filter_var(trim($_POST['name']));
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_EMAIL);
$password = filter_var(trim($_POST['password']));


$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');

$mysql->query("INSERT INTO `Данные Клиента` (`login`, `name`, `email`, `password`)
VALUES('$login', '$name', '$email', '$password')" );
$mysql->close();
?>