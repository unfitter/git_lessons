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
            <a class="nav-link active" aria-current="page" href="index.php">Cinema</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="theater.php">Theater</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="circus.php">Circus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="userpage.php">User Page</a>
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

  <!-- Carousel wrapper -->
  
<!-- Inner -->
<div class="carousel-inner py-4">
  <!-- Single item -->
  <div class="carousel-item active">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <img 
            src="https://artanddesigninspiration.com/wp-content/uploads/2017/06/jumbo-1882-circus-poster.jpg"
            class="card-img-top"
            alt="Get Out"
            />
            <div class="card-body">
              <h5 class="card-title">Jumbo</h5>
              <p class="card-text">
                The greatest elephant on Earth!
              </p>
              <a href="/productpages/jumbo.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://artanddesigninspiration.com/wp-content/uploads/2017/06/RBposters-740x1024.jpg"
            class="card-img-top"
            alt="Social Network"
            />
            <div class="card-body">
              <h5 class="card-title">Tiger craziness</h5>
              <p class="card-text">
                Its a Tiger. C'mon!
              </p>
              <a href="/productpages/tiger.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://artanddesigninspiration.com/wp-content/uploads/2017/06/hair-of-heads.jpeg"
            class="card-img-top"
            alt="lamb"
            />
            <div class="card-body">
              <h5 class="card-title">Greatest show on Earth</h5>
              <p class="card-text">
                There are 3 of them...
              </p>
              <a href="/productpages/greatest.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://artanddesigninspiration.com/wp-content/uploads/2017/06/1920.jpeg"
            class="card-img-top"
            alt="Man of LaMancha"
            />
            <div class="card-body">
              <h5 class="card-title">Favourite Clown</h5>
              <p class="card-text">
                Make sure you are not afraid of them
              </p>
              <a href="/productpages/manlamancha.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://i.pinimg.com/564x/ab/49/91/ab499179274c45e4dcdfdf9d7243147a.jpg"
            class="card-img-top"
            alt="Jurassic Park"
            />
            <div class="card-body">
              <h5 class="card-title">Casino de Paris</h5>
              <p class="card-text">
                It's just awsome
              </p>
              <a href="/productpages/casino.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
            src="https://i.pinimg.com/564x/f8/e6/be/f8e6be3506efeabf428fc8b74b946c44.jpg"
            class="card-img-top"
            alt="Back to the Future"
            />
            <div class="card-body">
              <h5 class="card-title">The strongest man on Earth</h5>
              <p class="card-text">
                He will open this can of cucumbers...
              </p>
              <a href="/productpages/strongest.php" class="btn btn-primary">Buy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Single item -->
  

  <!-- Inner -->
</div>
<!-- Carousel wrapper -->
</body>
</html>