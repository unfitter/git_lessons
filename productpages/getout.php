</!DOCTYPE html>
<?php

$mysql = new mysqli('localhost', 'root', '', 'Kursovaya');
 $query = $mysql->query("SELECT * FROM `Описание` WHERE `id` = 1 ");
 $query1 = $mysql->query("SELECT * FROM `Мероприятие` WHERE `id` = 1 ");
          
 $id = $query->fetch_assoc();
$id1 = $query1->fetch_assoc();
 ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="productstyle.css" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <title></title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
            <a class="nav-link active" href="theater.html">Theater</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="circus.html">Circus</a>
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

  

<div class="container">
    <div class="card">
        <div class="card-body">
            <h3 class="card-title"><?php

            echo $id['Название'];
           ?></h3>
            <h6 class="card-subtitle">Horror</h6>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="<?php echo $id1['img'] ?>" class="card-img-top"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5">Description</h4>
                    <p>This movie is outrageous! You should definetely see it!</p>
                    <h2 class="mt-5">
                        $15
                    </h2>
                    <button class="btn btn-dark btn-rounded mr-1" data-toggle="tooltip" title="" data-original-title="Add to cart">
                        <i class="fa fa-shopping-cart"></i>
                    </button>
                    <button class="btn btn-primary btn-rounded">Buy Now</button>
                    <h3 class="box-title mt-5">Info</h3>
                    <ul class="list-unstyled">
                        <li><i>Director:</i><?php echo $id['Руководитель'] ?></li>
                        <li><i>Year of production:</i><?php echo $id['Год'] ?></li>
                        <li><i>Duration(min):</i><?php echo $id['Длительность'] ?></li>
                    </ul>
                </div>
    
            </div>
        </div>
    </div>
</div>
  </body>
</html>