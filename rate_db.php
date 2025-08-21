<?php
// rate_db.php
session_start();
header('Content-Type: application/json; charset=utf-8');

require_once 'db.php'; // ต้องมี $conn = new PDO(...)

try {
  // 1) ตรวจสอบล็อกอิน
  if (empty($_SESSION['user_login'])) {
    echo json_encode('กรุณาเข้าสู่ระบบ');
  }
  $userId  = (int)$_SESSION['user_login'];

  // 2) รับค่า
  $movieId = isset($_POST['movie_id']) ? (int)$_POST['movie_id'] : 0;
  $score   = isset($_POST['rating'])   ? (int)$_POST['rating']   : 0;

  if ($movieId <= 0 || $score < 1 || $score > 5) {
    echo json_encode('ไม่ถูกต้อง');
  }

  // (ทางเลือก) เช็คว่ามีหนังจริง
  $chkMovie = $conn->prepare("SELECT id FROM movies WHERE id = :mid LIMIT 1");
  $chkMovie->execute([':mid' => $movieId]);
  if (!$chkMovie->fetch(PDO::FETCH_ASSOC)) {
    echo json_encode('ไม่ถูกต้อง');
  }

  // 3) เช็คว่าคู่ (user, movie) เคยให้คะแนนหรือยัง
  $find = $conn->prepare("
      SELECT id
      FROM rating
      WHERE id_user = :uid AND id_movies = :mid
      LIMIT 1
  ");
  $find->execute([':uid'=>$userId, ':mid'=>$movieId]);
  $existing = $find->fetch(PDO::FETCH_ASSOC);

  if ($existing) {
    // เคยมี -> UPDATE
    $upd = $conn->prepare("
        UPDATE rating
        SET rate = :rate
        WHERE id = :id
        LIMIT 1
    ");
    $upd->execute([
      ':rate' => $score,
      ':id'   => (int)$existing['id']
    ]);
  } else {
    // ยังไม่มี -> INSERT
    $ins = $conn->prepare("
        INSERT INTO rating (id_user, id_movies, rate)
        VALUES (:uid, :mid, :rate)
    ");
    $ins->execute([
      ':uid'  => $userId,
      ':mid'  => $movieId,
      ':rate' => $score
    ]);
    
  }

  echo json_encode(['ok'=>true, 'rating'=>$score]);


} catch (Throwable $e) {
  // error_log($e->getMessage());
  $_SESSION['error'] = "บันทึกคะแนนไม่สำเร็จ";
}
