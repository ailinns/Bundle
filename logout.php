<?php
    session_start();
    unset($_SESSION['user_login']);
    $_SESSION['success'] = 'ออกจากระบบสำเร็จ';
    header('location: index.php')
?>