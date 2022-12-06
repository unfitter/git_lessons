<?php
$login = filter_var(trim($_POST['login']));
$password = filter_var(trim($_POST['password']));

$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');

$result = $mysql->query("SELECT * FROM `Данные Клиента` WHERE `логин` = '$login' AND `пароль` = '$password'");
$user = $result->fetch_assoc();
if(count($user) == 0){
    echo "Такого пользователя не существует!";
    exit();
}



setcookie('user', $user['Имя'], time() + 36000, "/");

$mysql->close();
header('Location: /index.php');

?>