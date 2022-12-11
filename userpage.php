<?php
$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');
?>
</!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="style\style.css" rel="stylesheet" type="text/css">
  <title></title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 <?php  if ($_COOKIE['user'] != '') :        ?>
  <p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="exit.php">здесь</a></p>
  <?php endif;?>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Afisha</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"> 
            <a class="nav-link active" aria-current="page" href="/index.php">Cinema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/theater.php">Theater</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/circus.php">Circus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">User Page</a>
          </li>
        </ul>
        <div class="float-right">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item  ">
            <a class="nav-link active " aria-current="page" href="authorization.html">Sign In</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active " aria-current="page" href="registration.html">Sign Up</a>
          </li>
        </ul>
        </div>>
        
      </div>
    </div>
  </nav>
  <?php  if ($_COOKIE['user'] != '') :        ?>
  <h3>Привет <?=$_COOKIE['user']?></h3>
  <?php endif;?>
  <h4>Ваши билеты на данный момент:</h4>
  <?php 
      $check = $_COOKIE['user'];
      $bresult = $mysql->query("SELECT * FROM `Билеты` WHERE `владелец` = '$check'");
      $bilet = $bresult->fetch_assoc();
      ?>
      <p> Ваше место <?php echo $bilet['Место'] ?></p>
      <p> Цена билета <?php echo $bilet['Цена'] ?></p>
      <p> Название мероприятия <?php echo $bilet['Название'] ?></p>
  </body>
   
   </html>