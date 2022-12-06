<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');
$mysql->query("INSERT INTO 'Данные Клиента' ('login', 'name', 'email', 'password')
VALUES('$login', '$name', '$email', '$password')" );
$mysql->close();
?>