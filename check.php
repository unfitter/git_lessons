<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
$login = filter_var(trim($_POST['login']));
$name = filter_var(trim($_POST['name']));
$email = filter_var(trim($_POST['email']),
FILTER_SANITIZE_EMAIL);
$password = filter_var(trim($_POST['password']));
$password = md5($password);

if (mb_strlen ($login) < 5 || mb_strlen($login) > 90) {
    echo "Недоспутимая длина логина";
    exit ();
 } else if (mb_strlen($name) < 3 || mb_strlen ($name) > 50) {
    echo "Недоспутимая длина имени";
    exit();
    } else if (mb_strlen($pass) < 2 || mb_strlen ($pass) > 6) {
    echo "Недоспутимая длина пароля (от 2 до 6 символов)";
    exit ();
    }

$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');

$mysql->query("INSERT INTO `Данные Клиента` (`логин`, `Имя`, `Электронная почта`, `пароль`)
VALUES('$login', '$name', '$email', '$password')" );
$mysql->close();
header('Location: /');
?>