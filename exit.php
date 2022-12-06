<?php
setcookie('user', $user['Имя'], time() - 36000, "/");
header('Location: index.php')
?>