<?php
  require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>BUNDLE</title>
  
        <!-- Boostrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
        <!-- css -->
        <link href="style.css" rel="stylesheet">

        <!-- icon awesome -->
        <script src="https://kit.fontawesome.com/67736b8fc7.js" crossorigin="anonymous"></script>
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400..800&family=Dosis:wght@200..800&family=Economica:ital,wght@0,400;0,700;1,400;1,700&family=Oxygen+Mono&display=swap" rel="stylesheet">
        

        <!-- animated css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      
      </head>
<body>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
    <a class="navbar-brand me-auto" href="#"><img src="images/logo.PNG" class="repimg"></a>
    
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="images/logo.png" width="120px"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link mx-lg-2" aria-current="page" href="index.php"><font>หน้าหลัก</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="genre.php"><font>หมวดหมู่</font></a>
          </li>
          <li class="nav-item">
            
            <a class="nav-link mx-lg-2" href="top.php"><font>อันดับหนัง</font></a>
          </li>
        </ul>
      </div>
    </div>
    <a href="login.php" class="login-button" ><font>เข้าสู่ระบบ</font></a>
    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <!-- End Nav -->

    <!-- Start Banner -->

    <div id="carouselExample" class="carousel slide banner-box" data-bs-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="images/image1.jpg" class="d-block w-80" alt="image1">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/image2.jpg" class="d-block w-80" alt="image2">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/image3.jpg" class="d-block w-80" alt="image3">
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- End Banner -->
<br>

<!-- Start Popular -->
 <div class="popular-wrap">
    <h2 class="popular-title">ยอดนิยม</h2>

    <div class="popular-grid">
      <a class="pop-item" href="#"><img src="images/ban1.jpg" alt="pop1"></a>
      <a class="pop-item" href="#"><img src="images/ban2.jpg" alt="pop2"></a>
      <a class="pop-item" href="#"><img src="images/ban3.jpg" alt="pop3"></a>
      <a class="pop-item" href="#"><img src="images/ban4.jpg" alt="pop4"></a>
      <a class="pop-item" href="#"><img src="images/ban5.jpg" alt="pop5"></a>
    </div>
  </div>

  <!-- End Popular -->

</body>
</html>
