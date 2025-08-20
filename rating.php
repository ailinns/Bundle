 <?php
 session_start();
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

        <link rel="icon" type="image/x-icon" href="images/favicon.ico">

         <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      
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
    <a class="navbar-brand me-auto" href="#"><img src="images/logo.PNG" width="120px" class="repimg"></a>
    
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

    
    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
    <!-- End Nav -->
<br>
<br><br>

<!-- Start Popular -->
<section class="rating-page container-xl my-4">
  <h2 class="text-white fw-bold mb-3">ให้คะแนนภาพยนตร์</h2>

  <div class="row g-4">

  <?php
     $stmt = $conn->query("SELECT * FROM movies");
    $stmt->execute();
    while ($rowmovie = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>

    <!-- Card -->
<div class="col-12 col-md-6 col-lg-4">
  <div class="card movie-card2 h-100">
    <!-- โปสเตอร์ -->
    <div class="poster ratio ratio-16x9">
      <img src="<?php echo $rowmovie['poster_url']; ?>" alt="<?php echo $rowmovie['title']; ?>">
    </div>

    <div class="card-body">
      <h5 class="card-title mb-1"><?php echo $rowmovie['title']; ?></h5>
      <div class="text-muted small mb-2"><?php echo $rowmovie['year']; ?> • <?php echo $rowmovie['genre']; ?></div>
      <button
        class="btn btn-danger btn-sm btn-rate"
        data-bs-toggle="modal"
        data-bs-target="#ratingModal"
        data-movie-id="<?php echo $rowmovie['id']; ?>"
        data-movie-title="<?php echo $rowmovie['title']; ?>"
        data-poster="<?php echo $rowmovie['poster_url']; ?>" 
        data-current-rating="0"
      >
        ⭐ ให้คะแนน
      </button>
    </div>
  </div>
</div>

    <!-- อีกใบ -->
<?php
}
?>

  </div>
</section>

<!-- Modal ให้คะแนน -->
<div class="modal fade" id="ratingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form id="ratingForm" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-dark">
          ให้คะแนน: <span id="rmTitle"></span>
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="ปิด"></button>
      </div>

      <div class="modal-body">
        <input type="hidden" name="movie_id" id="rmMovieId">
        <input type="hidden" name="rating" id="rmRating" value="0">

        <div class="star-row text-center my-2">
          <!-- 5 ดาว -->
          <span class="star" data-val="1">★</span>
          <span class="star" data-val="2">★</span>
          <span class="star" data-val="3">★</span>
          <span class="star" data-val="4">★</span>
          <span class="star" data-val="5">★</span>
        </div>
        <p class="text-center m-0" id="rmLabel">เลือก 1–5 ดาว</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">ยกเลิก</button>
        <button type="submit" class="btn btn-danger">บันทึกคะแนน</button>
      </div>
    </form>
  </div>
</div>



  <!-- End Popular -->

  <script>
document.addEventListener('DOMContentLoaded', () => {
  const ratingModal = document.getElementById('ratingModal');
  const titleEl = document.getElementById('rmTitle');
  const movieIdEl = document.getElementById('rmMovieId');
  const ratingEl = document.getElementById('rmRating');
  const labelEl  = document.getElementById('rmLabel');
  const stars    = () => [...ratingModal.querySelectorAll('.star')];

  // เปิดโมดัลและใส่ค่า
  document.querySelectorAll('.btn-rate').forEach(btn => {
    btn.addEventListener('click', () => {
      const id    = btn.dataset.movieId;
      const title = btn.dataset.movieTitle;
      const cur   = Number(btn.dataset.currentRating || 0);

      titleEl.textContent = title;
      movieIdEl.value = id;
      ratingEl.value  = cur;
      labelEl.textContent = cur ? `ให้ไปแล้ว ${cur}/5 (เปลี่ยนได้)` : 'เลือก 1–5 ดาว';

      // reset stars
      stars().forEach(s => s.classList.remove('active','hover'));
      if(cur){
        stars().forEach(s => { if(Number(s.dataset.val) <= cur) s.classList.add('active'); });
      }
    });
  });

  // interaction: hover/click
  ratingModal.addEventListener('mouseover', e => {
    if(!e.target.classList.contains('star')) return;
    const v = Number(e.target.dataset.val);
    stars().forEach(s => s.classList.toggle('hover', Number(s.dataset.val) <= v));
  });
  ratingModal.addEventListener('mouseout', e => {
    if(!e.target.classList.contains('star')) return;
    stars().forEach(s => s.classList.remove('hover'));
  });
  ratingModal.addEventListener('click', e => {
    if(!e.target.classList.contains('star')) return;
    const v = Number(e.target.dataset.val);
    ratingEl.value = v;
    labelEl.textContent = `${v}/5`;
    stars().forEach(s => s.classList.toggle('active', Number(s.dataset.val) <= v));
  });

  // submit -> AJAX ไปที่ rate.php
  document.getElementById('ratingForm').addEventListener('submit', async (ev) => {
    ev.preventDefault();
    const form = new FormData(ev.currentTarget);
    if(Number(form.get('rating')) === 0){ alert('กรุณาเลือกดาว'); return; }

    try{
      const res = await fetch('rate_db.php', { method:'POST', body: form });
      const data = await res.json();
      if (data.ok) {
        const modal = bootstrap.Modal.getInstance(ratingModal);
        modal.hide();
        const btn = document.querySelector(`.btn-rate[data-movie-id="${form.get('movie_id')}"]`);
        if (btn) btn.dataset.currentRating = data.rating;

    // แจ้งเตือนสำเร็จทันที
    Swal.fire({
      icon: 'success',
      title: 'สำเร็จ',
      text: data.message || 'บันทึกคะแนนเรียบร้อยแล้ว'
    });
  } else {
    Swal.fire({
      icon: 'error',
      title: 'บันทึกไม่สำเร็จ',
      text: data.message || 'กรุณาลองใหม่อีกครั้ง'
    });
  }

    }catch(err){
      Swal.fire({ icon:'error', title:'เกิดข้อผิดพลาด', text:'ติดต่อเซิร์ฟเวอร์ไม่สำเร็จ' });
      console.error(err);
    }
  });
});
</script>


</body>
</html>
