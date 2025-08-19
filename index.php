<?php
  session_start();
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
        

        <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400..800&family=Dosis:wght@200..800&family=Economica:ital,wght@0,400;0,700;1,400;1,700&family=Oxygen+Mono&display=swap" rel="stylesheet">
        

        <!-- animated css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      
      </head>
<body>


<!-- php session -->
<?php
    if (isset($_SESSION['user_login'])){
        $user_id = $_SESSION['user_login'];
        $stmt = $conn->query("SELECT * FROM user WHERE id_user = $user_id");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>

<?php if(isset($_SESSION['error'])) { ?>
                <script>
                    Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด',
                    text: '<?php echo $_SESSION['error']; unset($_SESSION['error']);?>',
                    })
                </script>
                <?php unset($_SESSION['error']); ?>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <script>
                    Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ',
                    text: '<?php echo $_SESSION['success']; unset($_SESSION['success']);?>',
                    })
                </script>
                <?php unset($_SESSION['success']); ?>
            <?php } ?>

<!-- End php session -->

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
            <a class="nav-link mx-lg-2" href="top.php"><font>อันดับหนัง</font></a>
          </li>
          <li class="nav-item">
            
            <a class="nav-link mx-lg-2" href="rating.php"><font>ให้คะแนน</font></a>
          </li>
        </ul>
      </div>
    </div>

    <?php if (!empty($_SESSION['user_login'])): ?>
            <span class="me-2 text-white">
          สวัสดี,  <?php echo $row['username'];  ?>
        </span>
        <form method="post" action="logout.php" class="m-0 d-inline">
          <a href="logout.php" class="login-button" ><font>ออกจากระบบ</font></a>
        </form>
      <?php else: ?>
        <a href="login.php" class="login-button" ><font>เข้าสู่ระบบ</font></a>
    <?php endif; ?>

    
    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <!-- End Nav -->

    <!-- Start Banner -->

    <div id="heroCarousel" class="carousel slide hero-box" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="hero-slide" style="background-image: url('images/image1.jpg');">
        <div class="hero-content">
          <span class="hero-tag">แอคชั่น, ระทึกขวัญ</span>
          <span class="hero-year">2008</span>
          <h1 class="hero-title">The Dark Knight</h1>
          <p class="hero-desc">
            เมื่อความมืดมิดโถมล้อมเมืองก็อทแธม ฮีโร่ในชุดดำต้องเผชิญหน้ากับภัยคุกคามที่อันตรายที่สุด
          </p>
          <div class="hero-buttons">
            <a href="#" class="btn btn-play"><i class="fa-solid fa-play"></i> เล่นทันที</a>
            <a href="#" class="btn btn-more">รายละเอียด</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="hero-slide" style="background-image: url('images/image2.jpg');">
        <div class="hero-content">
          <span class="hero-tag">ไซไฟ, แอคชั่น</span>
          <span class="hero-year">2010</span>
          <h1 class="hero-title">Inception</h1>
          <p class="hero-desc">
            ภารกิจเจาะความฝันเพื่อปลูกความคิดสุดอันตรายที่ไม่มีใครเคยทำสำเร็จมาก่อน
          </p>
          <div class="hero-buttons">
            <a href="#" class="btn btn-play"><i class="fa-solid fa-play"></i> เล่นทันที</a>
            <a href="#" class="btn btn-more">รายละเอียด</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- End Banner -->
<br>

<!-- Start Popular -->
 <div class="popular-wrap">
  <h2 class="popular-title">ยอดนิยม</h2>
  <div class="popular-grid">
    
    <!-- Card 1 -->
    <div class="movie-card">
      <div class="poster">
        <img src="images/ban1.jpg" alt="Spider-Man">
        <span class="rating"><i class="fa-solid fa-star"></i> 4.8</span>
      </div>
      <div class="info">
        <h3>Spider-Man</h3>
        <p>2023</p>
        <span class="genre">แอคชั่น</span>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="movie-card">
      <div class="poster">
        <img src="images/ban2.jpg" alt="The Batman">
        <span class="rating"><i class="fa-solid fa-star"></i> 4.7</span>
      </div>
      <div class="info">
        <h3>The Batman</h3>
        <p>2022</p>
        <span class="genre">แอคชั่น</span>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="movie-card">
      <div class="poster">
        <img src="images/ban3.jpg" alt="Dune">
        <span class="rating"><i class="fa-solid fa-star"></i> 4.6</span>
      </div>
      <div class="info">
        <h3>Dune</h3>
        <p>2021</p>
        <span class="genre">ไซไฟ</span>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="movie-card">
      <div class="poster">
        <img src="images/ban4.jpg" alt="Top Gun">
        <span class="rating"><i class="fa-solid fa-star"></i> 4.9</span>
      </div>
      <div class="info">
        <h3>Top Gun</h3>
        <p>2022</p>
        <span class="genre">แอคชั่น</span>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="movie-card">
      <div class="poster">
        <img src="images/ban5.jpg" alt="Avatar">
        <span class="rating"><i class="fa-solid fa-star"></i> 4.5</span>
      </div>
      <div class="info">
        <h3>Avatar</h3>
        <p>2022</p>
        <span class="genre">ไซไฟ</span>
      </div>
    </div>

  </div>
      </div>


  <!-- End Popular -->

  <br>
  <!-- Start Genre -->

 <div class="popular-wrap">
      <h2 class="popular-title">หมวดหมู่</h2>
  
  <div class="chips-wrap">
    <a href="drama.php" class="chip-btn">ดราม่า</a>
    <a href="#" class="chip-btn">แอคชั่น</a>
    <a href="#" class="chip-btn">ไซไฟ</a>
    <a href="#" class="chip-btn">สยองขวัญ</a>

    <a href="#" class="chip-btn">ผจญภัย</a>
    <a href="#" class="chip-btn">ตลก</a>
    <a href="#" class="chip-btn">ระทึกขวัญ</a>
    <a href="#" class="chip-btn">โรแมนติก</a>

    <a href="#" class="chip-btn">แนวการทดลอง</a>
    <a href="#" class="chip-btn">คอมเมดี้</a>
    <a href="#" class="chip-btn">การแสดงผลงาน</a>
    <a href="#" class="chip-btn">การจ้างงาน</a>
  </div>

</div>
<br>


  <!-- End Genre -->

</body>
</html>
