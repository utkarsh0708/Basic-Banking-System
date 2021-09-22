<!DOCTYPE html>
<html lang="en">
<head>
   <title>Everybody's Bank</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body style="background-color : #ffcccc;">
<!-- Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">EVERYBODY'S BANK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="customers.php">Our Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="transactions.php">Transfer History</a>
        </li>
        
</div>
      </ul>
    </div>
  </div>
</nav>

<!-- Carousel -->

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/8.jpg" alt="Easy Transfer" width="1100" height="500">
      <div class="carousel-caption">
    <h3>Easiest and Convenient Money Transfer</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/10.png" alt="Quick Deposit" width="1100" height="500">
      <div class="carousel-caption">
    <h3 style="color : black">Quickest, Low Interest Rate Personal Loans</h3>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/11.png" alt="Low interests" width="1100" height="500">
      <div class="carousel-caption">
    <h3>100% Customer Satisfaction</h3>
    </div>
    </div>
  </div>
  
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<!--About us-->

<section class= "my-5">
<div class="py-5">
 <h3 class="text-center" >ABOUT US</h3>
 </div>

<div class="container-fluid">
 <div class ="col">
   <div class="center">
   <div class="text-center">
      <h1>EVERYBODY'S BANK</h1>
      <p1> Everybody's Bank is an open source bank where every site visitor can handle money transactions between the customers. Users can view which customer has how much balance in their account and view thier transaction history if they have transferred money from one account to another.
        </div> 
      <br>
      <br>
      <img src="images/2.jpg" class="img2">
      </div>
 </div>
 </div>

<footer class="text-center mt-2 py-5">
        <p>&copy 2021  <b>Utkarsh Bhosekar</b> </br>CEO, Everybody's Bank</p>
      </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
</body>
</html>