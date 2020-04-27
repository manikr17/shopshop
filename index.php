<?php?>

<!--HTML boiler plate-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web learn</title>
  
    <!--bootstrap link-->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!--font awesome-->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <!--bootstrap js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a href="#" class="navbar-brand">ShopShop</a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link">About</a>
            <a href="#" class="nav-item nav-link">Products</a>
          <a href="#" class="nav-item nav-link">Register</a>
          <a href="#" class="nav-item nav-link">Login</a>
        </div>
        <div class="navbar-nav ml-auto">
            <a href="#" class="nav-item nav-link active"><i class="fa fa-user-o"></i></a>
        </div>
        <!--<form class="form-inline">
            <input type="text" class="form-control mr-sm-2" placeholder="Search" aria-label="search">
            <button type="submit" class="btn btn-light my-sm-0">Search</button>
        </form>-->
    </div>
</nav>
  
  <!--Search bar-->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <form>
      <div class="text-center">
            <input type="text" class="form-control mr-sm-2" placeholder="Search"><br>
            <button type="submit" class="btn btn-outline-dark my-sm-0">Search</button>
      </div>
    </form>
  </div>
</div>
  
  <!--cards-->
  <div class="card-group m-4">
  <? for($i=0;$i<4;$i++){ ?>
  
    <div class="card m-4">
        <img src="blank.png" class="card-img-top" alt="Product">
        <div class="card-body">
            <h5 class="card-title">Product&nbsp;&nbsp;<a href="#"><i class="fa fa-heart-o"></i></a></h5>
            <p class="card-text">Product <?=$i?></p>
        </div>
        <div class="text-center">
          <a href="#" class="btn btn-dark mb-4" role="button">Buy</a>
          <!--<button type="button" class="btn btn-dark mb-4">Buy</button>-->
      </div>
        <!--<div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>-->
    </div>
 
  <? } ?>
     </div>
  
  
<body>
</html>
