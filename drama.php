          <?php
  require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bundle</title>
  
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
            <a class="nav-link mx-lg-2" href="top.php"><font>อันดับหนัง</font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-lg-2" href="rating.php"><font>ให้คะแนน</font></a>
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
<br>
<br><br>

<!-- Start Popular -->
 <section class="genre-list">
  <div class="list-header">
    <a href="#" class="back-link"><i class="fa-solid fa-arrow-left"></i> กลับ</a>
    <h2>หมวดหมู่: <span>drama</span></h2>
    <p class="subtitle">ค้นพบภาพยนตร์ที่น่าสนใจ</p>
  </div>

  <div class="movie-list">

    <!-- 1: The Dark Knight -->
    <article class="movie-row">
      <div class="poster">
        <img src="images/ban1.jpg" alt="The Dark Knight">
      </div>
      <div class="detail">
        <div class="meta">
          <span class="year">2008</span>
          <span class="dot">•</span>
          <span class="duration">152 นาที</span>
          <span class="dot">•</span>
          <span class="rating"><i class="fa-solid fa-star"></i> 4.9</span>
        </div>
        <h3 class="title">The Dark Knight</h3>
        <p class="desc">
          เมื่อความมืดมิดโถมล้อมเมืองก็อทแธม ฮีโร่ในชุดดำต้องเผชิญหน้ากับปริศนาและภัยคุกคามที่อันตรายที่สุด
        </p>
        <div class="actions">
          <a href="#" class="btn-play"><i class="fa-solid fa-play"></i> เล่นทันที</a>
          <button class="btn-secondary" disabled><i class="fa-solid fa-plus"></i> เพิ่มในรายการ</button>
        </div>
      </div>
    </article>

    <!-- 2: Inception -->
    <article class="movie-row">
      <div class="poster">
        <img src="images/ban2.jpg" alt="Inception">
      </div>
      <div class="detail">
        <div class="meta">
          <span class="year">2010</span>
          <span class="dot">•</span>
          <span class="duration">148 นาที</span>
          <span class="dot">•</span>
          <span class="rating"><i class="fa-solid fa-star"></i> 4.8</span>
        </div>
        <h3 class="title">Inception</h3>
        <p class="desc">
          การเดินทางเข้าสู่โลกของความฝันพร้อมเปลี่ยนแปลงทุกสิ่งที่คุณเชื่อว่าความจริง
        </p>
        <div class="actions">
          <a href="#" class="btn-play"><i class="fa-solid fa-play"></i> เล่นทันที</a>
          <button class="btn-secondary" disabled><i class="fa-solid fa-plus"></i> เพิ่มในรายการ</button>
        </div>
      </div>
    </article>

    <!-- 3: Interstellar -->
    <article class="movie-row">
      <div class="poster">
        <img src="images/ban3.jpg" alt="Interstellar">
      </div>
      <div class="detail">
        <div class="meta">
          <span class="year">2014</span>
          <span class="dot">•</span>
          <span class="duration">169 นาที</span>
          <span class="dot">•</span>
          <span class="rating"><i class="fa-solid fa-star"></i> 4.7</span>
        </div>
        <h3 class="title">Interstellar</h3>
        <p class="desc">
          ภารกิจข้ามกาแล็กซีเพื่อหาดาวเคราะห์ใหม่สำหรับมนุษยชาติ
        </p>
        <div class="actions">
          <a href="#" class="btn-play"><i class="fa-solid fa-play"></i> เล่นทันที</a>
          <button class="btn-secondary" disabled><i class="fa-solid fa-plus"></i> เพิ่มในรายการ</button>
        </div>
      </div>
    </article>

  </div>
</section>


  <!-- End Popular -->

</body>
</html>
