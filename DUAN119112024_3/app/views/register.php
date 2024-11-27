<?php
// Kết nối với cơ sở dữ liệu
include('db.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenKhachHang = $_POST['TenKhachHang'];
    $email = $_POST['Email'];
    $matKhau = password_hash($_POST['MatKhau'], PASSWORD_DEFAULT);
    $diaChi = $_POST['DiaChi'] ?? NULL;
    $soDienThoai = $_POST['SoDienThoai'] ?? NULL;

    $sql = "INSERT INTO KhachHang (TenKhachHang, Email, MatKhau, DiaChi, SoDienThoai) 
            VALUES ('$tenKhachHang', '$email', '$matKhau', '$diaChi', '$soDienThoai')";

if ($conn->query($sql) === TRUE) {
    // Đăng ký thành công, điều hướng tới trang đăng nhập
    header("Location: login.php");  // Điều hướng đến trang đăng nhập
    exit();  // Đảm bảo script dừng lại ngay sau khi điều hướng
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}
}
include_once('headerlogin.php')

?>

<?php
// include_once 'header.php'; // Đảm bảo đường dẫn chính xác
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký</title>
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
        }

        #registrationForm {
            background: #000;
            color: #fff;
            border-radius: 8px;
            width: 500px;
            padding: 20px;
        }

        #registrationForm label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        #registrationForm input {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            background-color: #000;
            border-radius: 5px;
            color: #fff;
        }

        #registrationForm input[type="email"] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #fff;
            width: 100%;
            max-width: 500px;
            color: #fff;
        }

        #registrationForm input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #fff;
            width: 100%;
            max-width: 500px;
            color: #fff;
        }

        .error {
            color: red;
            font-size: 0.9em;
            margin-bottom: 10px;
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

        .email-phone-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .email-phone-container div {
            flex: 1;
        }

        .email-phone-container div input {
            background-color: #000;
            color: #fff;
            border: 1px solid #fff;
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

        .password-container input {
            width: 100%;
            height: 35px;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 10px;
            border: 1px solid white;
            border-radius: 4px;
            background-color: inherit;
            color: white;
        }
    </style>
</head>
<body>

    <div class="title-in">
        <h1>Đăng ký tài khoản</h1>
    </div>

    <div class="Dangnhap">
        <form id="registrationForm" action="register.php" method="POST">
            <label for="TenKhachHang">Tên khách hàng:</label>
            <input type="text" id="TenKhachHang" name="TenKhachHang" required><br><br>

            <label for="Email">Email:</label>
            <input type="email" id="Email" name="Email" required><br><br>

            <label for="MatKhau">Mật khẩu:</label>
            <input type="password" id="MatKhau" name="MatKhau" required><br><br>

            <label for="DiaChi">Địa chỉ:</label>
            <input type="text" id="DiaChi" name="DiaChi"><br><br>

            <label for="SoDienThoai">Số điện thoại:</label>
            <input type="text" id="SoDienThoai" name="SoDienThoai"><br><br>

            <button type="submit">Đăng ký</button>
        </form>
    </div>
<style>
    
.footer{
    background-color: black;
  
}
/* Đặt nền và căn lề cho footer */
.footer1 {
    position: relative;
    background-image:url('../img/nen footer.png');/*Đặt ảnh nền */
    background-size: 100% 100%;
    padding: 20px;
    margin: 0 90px; /* Căn đều 2 bên với khoảng cách 116px */
    font-family: sans-serif;
    color: #000;
    
    
}

/* Kiểu chữ */
.footer1 h4 {
    color: red;
    margin-bottom: 10px;
}

.footer1>p {
    margin-bottom: 20px;
    color: #ddd;
    font-weight:600;
}
.footer2 {
    display: flex;
    justify-content: space-between;
    margin: 0 90px;
    /* background-color: black; */
    color: white;
    font-family: sans-serif ;
}

/* Cột */
.column {
    flex: 1;
    padding: 20px;
    
    /* background-color: #f0f0f0; */
    margin: 0 11px; /* Khoảng cách giữa các cột */
}
.column >li{
    list-style-type: none;
    line-height: 35px;
    
}
.column >li:hover{
    color: #FAB320;
}
/* Form email */

#userLogin > input[type="email"] {
    padding: 15px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #fff;
    width: 100%;
    max-width: 300px;
    height: 40px;
}


/* styles.css */



.footer3 {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #222;
    color: #fff;
   
}

.contact>span {
    font-size: 16px;
}

.phone {
    display: flex;
    align-items: center;
    font-size: 18px;
    margin-top: 5px;
}

.phone>i {
    margin-right: 8px;
}

.logo img {
    height: 150px; /* Adjust the logo size as needed */
}

.social-icons>a {
    color: #fff;
    font-size: 24px;
    margin: 0 10px;
    text-decoration: none;
}

.social-icons>a:hover {
    color: #f0c040; /* Change color on hover */
}

</style>
</body>
</html>
<?php
include_once('footerlogin.php');
?>