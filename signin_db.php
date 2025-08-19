<?php 

    session_start();
    require_once 'db.php';

    if (isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

      
        if (empty($username)) {
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: login.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: login.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวระหว่าง 5 ถึง 20 ตัวอักษร';
            header("location: login.php");
        } else {
            try {

                $check_data = $conn->prepare("SELECT * FROM user WHERE username = :username");
                $check_data->bindParam(":username", $username);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data->rowCount() > 0) {

                    if ($username == $row['username']) {
                        if (password_verify($password, $row['password'])) {
                            $check_data = $conn->prepare("SELECT * FROM user WHERE username = :username");
                            $check_data->bindParam(":username", $username);
                            $check_data->execute();
                            $row = $check_data->fetch(PDO::FETCH_ASSOC);
                            $_SESSION['user_login'] = $row['id_user'];
                            $_SESSION['success'] = "เข้าสู่ระบบสำเร็จ";
                            header("location: index.php");
                        } else {
                            $_SESSION['error'] = 'รหัสผ่านผิด';
                            header("location: login.php");
                        }
                    } else {
                        $_SESSION['error'] = 'ชื่อผู้ใช้ผิด';
                        header("location: login.php");
                    }
                } else {
                    $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
                    header("location: login.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>