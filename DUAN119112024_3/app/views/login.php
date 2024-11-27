<?php
// Kết nối với cơ sở dữ liệu
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $matKhau = $_POST['MatKhau'];

    $sql = "SELECT * FROM KhachHang WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Kiểm tra mật khẩu
        $row = $result->fetch_assoc();
        if (password_verify($matKhau, $row['MatKhau'])) {
            // Đăng nhập thành công, điều hướng tới trang index.php
            header("Location: /DUAN119112024_3/index.php");
            exit();  // Dừng script sau khi điều hướng
        } else {
            echo "<div class='error'>Mật khẩu không đúng!</div>";
        }
    } else {
        echo "<div class='error'>Không tìm thấy email này trong hệ thống!</div>";
    }
}
include_once('headerlogin.php')
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!-- Liên kết Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- CSS -->
    <style>
        .title-in {
            text-align: center;
            background-color: #000;
            color: #fff;
            padding: 20px;
        }
        .Dangnhap {
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        #registrationForm {
            background: #000;
            color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 500px;
        }
        #registrationForm label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        #registrationForm input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            background-color: #000;
            border-radius: 5px;
            color: #fff;
        }
        #registrationForm button {
            width: 100%;
            padding: 10px;
            background-color: #FAB302;
            color: #000;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
            border: 1px solid #FAB302;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        #registrationForm button:hover {
            background-color: #000;
            color: #FAB302;
        }
        .password-container {
            position: relative;
        }
        .password-container .eye-icon {
            position: absolute;
            right: 20px;
            top: 40%;
            cursor: pointer;
            font-size: 20px;
            z-index: 1;
            transition: color 0.3s ease;
        }
        .password-container .eye-icon:hover {
            color: #FAB302;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- Tiêu đề -->
    <div class="title-in">
        <h1>Đăng nhập</h1>
    </div>

    <!-- Form đăng nhập -->
    <div class="Dangnhap">
        <form id="registrationForm" action="login.php" method="POST">
            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" placeholder="Nhập email của bạn" required>

            <label for="MatKhau">Mật khẩu:</label>
            <div class="password-container">
                <input type="password" id="MatKhau" name="MatKhau" placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
   <?php
   include_once('footerlogin.php');
   ?>
</body>
</html>
