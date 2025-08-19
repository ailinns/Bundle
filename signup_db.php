

<?php
    session_start();
    require_once 'db.php';
    if (isset($_POST['signup'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];

        if (empty($username)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อ';
            header("location: register.php");
        } else if (empty($email)){
            $_SESSION['error'] = 'กรุณากรอกอีเมล';
            header("location: register.php");
        }
             else if (empty($password)){
            $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
            header("location: register.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5){
            $_SESSION['error'] = 'รหัสผ่านต้องมีความยาม5-20ตัวอักษร';
            header("location: register.php");
        }
         else if (empty($c_password)){
            $_SESSION['error'] = 'กรุณากรอกยืนยันรหัสผ่าน';
            header("location: register.php");
        } else if ($password != $c_password){
            $_SESSION['error'] = 'รหัสผ่านไม่ตรงกัน';
            header("location: register.php");
        } else{
            try{
                $check_user = $conn->prepare("SELECT username FROM user WHERE username = :username");
                $check_user->bindParam(":username", $username);
                $check_user->execute();
                $row = $check_user->fetch(PDO::FETCH_ASSOC);
                if($row['username'] == $username){
                    $_SESSION['error'] = 'มีชื่อผู้ใช้นี้ในระบบ';
                    header("location: register.php");
                } else if(!isset($_SESSION['error'])){
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO user(username, password, email) VALUES(:username, :password,:email)");
                    $stmt->bindParam(":username", $username);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->execute();
                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว!";
                    $check_data = $conn->prepare("SELECT * FROM user WHERE username = :username");
                    $check_data->bindParam(":username", $username);
                    $check_data->execute();
                    $row = $check_data->fetch(PDO::FETCH_ASSOC);
                    header("location: login.php");
                } else{
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: register.php");
                }

            } catch(PDOException $e){
                echo $e->getMessage();
                
            }
        }

    } else{
        echo "No";
    }
?>