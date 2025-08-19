<?php
 
  session_start();
  require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bundle</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">

    

    <link href="style2.css" rel="stylesheet">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- sweetalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body>

    <div class="wrapper">
        <form action="signup_db.php" method="post">
            <h1>สมัครสมาชิก</h1>
            
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

            <div class="input-box">
                <input type="text" name="username" placeholder="ชื่อผู้ใช้" required>
                <i class='bx bxs-user' ></i>
            </div>

            <div class="input-box">
                <input type="text" name="email" placeholder="name@example.com" required>
                <i class='bx bx-envelope' ></i>
            </div>



            <div class="input-box">
                <input id="password" name="password" type="password" placeholder="กรอกรหัสผ่าน" required>
                <i id="passicon" onclick="pass()" class='bx bxs-lock-alt' ></i>
            </div>

            <div class="input-box">
                <input id="password" name="c_password" type="password" placeholder="ยืนยันรหัสผ่าน" required>
            </div>


            <button type="submit" name="signup" class="btn">สมัครสมาชิก</button>

            <div class="register-link">
                <p>มีบัญชีกับเราแล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
            </div>
            
        </form>
    <script src="script.js"></script>
    </div>
    
</body>
</html>