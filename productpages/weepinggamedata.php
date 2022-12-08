<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
$seat = filter_var(trim((int)$_POST['seat']));

$pageid = filter_var(trim((int)$_POST['page']));


/*if (mb_strlen ($login) < 5 || mb_strlen($login) > 90) {
    echo "Недоспутимая длина логина";
    exit ();
 } else if (mb_strlen($name) < 3 || mb_strlen ($name) > 50) {
    echo "Недоспутимая длина имени";
    exit();
    } else if (mb_strlen($password) < 2 || mb_strlen ($pass) > 6) {
    echo "Недоспутимая длина пароля (от 2 до 6 символов)";
    exit ();
    }
    */

$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');






$cookiename = $_COOKIE["user"];
//$pageresult = $_COOKIE[];

$result = $mysql->query("SELECT * FROM `Мероприятие` WHERE `Название` = 'Weeping Game'");
$film = $result->fetch_assoc();
$film1 = $film['Название'];
$mesto = $_POST['seat'];

$mysql->query("INSERT INTO `Билеты` (`Место`, `Цена`, `Название`, `владелец`)
VALUES('$seat', '15', '$film1', '$cookiename')" );
$mysql->close();
header('Location: /index.php');
?>