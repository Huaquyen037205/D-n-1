<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAFs - Fashion</title>
    <link rel="stylesheet" href="./public/css/footer.css">
    <link rel="stylesheet" href="./public/css/header.css ?v= <php echo time(); >?">
    <!-- <link rel="stylesheet" href="./public/css/home.css"> -->
    <script src="https://kit.fontawesome.com/1c5c4be935.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    * {
    
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
  background-color: #000;
}
.san1 {
    background-color: #FAB302;
    color: #000;
    padding: 5px;
    font-size: 13px;
}
.san1 > p{
  text-align: center;
}


section {
    background-size: cover;
    background-position: center;
}

.nav {
    width: 100%;
    height: 50px;
    background-color: #000;
    display: flex;
    /* Use flexbox for navigation alignment */
    justify-content: space-between;
    align-items: center;
    
}

.nav-left ul li:hover {
    border-bottom: 2px solid #FAB302;
}

.nav-left {
    
    width: 40%;
}

.nav-right {
    width: 15%;
    /* padding: 20px; */
}

.nav-left ul,
.nav-right ul {
    list-style: none;
    padding: 0;
    margin: 0;
}
.nav-giua{

text-align: center;
}

.nav-giua img {
    width: 15%;
    height: 20%;
    margin-right: 350px;


}

.nav-left ul li,
.nav-right ul li {
    display: inline-block;  
    color: #fff;
}

.nav-left ul li {
    margin-left: 115px;
    font-size: 13px;
    margin-right: 10px;
    /* Add space between items */
}

.nav-right ul li {
    margin-left: 10px;
    
}


/*  */
.menu{
    background-color: #000;
    text-align: center;
    width: 100%;
    
}
.menu ul {
    list-style: none;
    padding: 10px;
    margin: 0;
    font-size: 16px;
    
  }
  
  .menu li {
    display: inline-block;
    position: relative;
    width: 100px;

  }
  .menu> ul> li >a{
    text-decoration: none;
    display: flex;
    color: #fff;
    /* gap:10px; */
    padding-left: 10px;
  }
  .menu> ul> li > a:hover   {
    color: #FAB302;
    
  }
  .submenu {
    display: none;
    position: absolute;
    top: 130%; /* Để menu con nằm ngay dưới mục cha */
    left: 0;
    white-space: nowrap; /* Giúp các mục menu con không xuống dòng */
    background-color: #000; /* Màu nền cho menu con */
     /* Tạo khoảng cách dọc cho các mục */
     border: 1px solid #fff;
  }
  
  .submenu li {
    display: inline-block; /* Cài đặt các mục menu con nằm ngang */
    padding: 5px; /* Tạo khoảng cách cho các mục menu */
    
  }
  
  .menu li:hover .submenu {
    display: block; /* Hiển thị menu con khi hover mục cha */
    font-size: 16px;
    
  }
  
  .submenu li a {
    text-decoration: none; /* Bỏ gạch chân trong các liên kết */
    color: #fff; /* Màu chữ */
  }
  
  .submenu li a:hover {
    color: #FAB302; /* Đổi màu chữ khi hover */
  }
  


.success-message {
    width: 500px;
    margin-left: 530px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 10px;
}


.error-message {
    width: 500px;
    margin-left: 530px;
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    margin-top: 10px;
}

/* Icon search */
.icon {
  position: relative;
  display: inline-block;
}

#searchInput {
  background-color: #000;
  color: #fff;
  position: absolute;
  right: -5px;
  top: 50%;
  transform: translateY(-50%);
  font-size: 16px;
  padding: 5px;
  padding-left: 15px;
  border: 1px solid #fff;
  border-radius: 10px;
  width: 0; /* Ban đầu, chiều rộng là 0 */
  opacity: 0; /* Ban đầu, độ mờ là 0 */
  transition: width 0.6s ease, opacity 1s ease, visibility 0s 0.6s; /* Tăng thời gian chuyển động lên 0.6s */
}

.icon:hover #searchInput {
  width: 250px; /* Khi hover, chiều rộng mở rộng từ từ */
  opacity: 1; /* Độ mờ dần thành 1 */
  visibility: visible; /* Hiển thị input */
  pointer-events: auto; /* Cho phép click vào input */
  z-index: -1;  
}
/* Icon user */
.user-menu {
  list-style: none;
  margin: 0;
  padding: 0;
  position: absolute;
  top: 150%; /* Đặt menu dưới icon */
  left: -15px;
  color: #fff;
  display: none; /* Ẩn menu con ban đầu */
  background-color: #000; /* Màu nền cho menu */
  border: 1px solid #fff; /* Viền của menu */
  border-radius: 5px;
  min-width: 150px; /* Đặt chiều rộng menu */
  font-family:'Times New Roman', Times, serif;
  font-size: 16px;
  
}

.user-menu li {
  padding: 10px;
}

.user-menu li a {
  text-decoration: none;
  color: #fff;
  /* display: block; */
  
}

.user-menu li a:hover {
  color: #FAB302; /* Màu nền khi hover vào menu item */
  
}

.icon:hover .user-menu {
  display: block; /* Khi hover vào icon, hiển thị menu con */
}

</style>
</head>

<body>

    <!--         MỞ ĐẦU HEADER         -->

    <!--   ---------------------------------   -->



    <div class="san1">
        <p>MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC</p>
    </div>
    <section>
        <div class="nav">
            <div class="nav-left">
                <ul>
                   
                    <a href="index.php?page=main"> <li style=" font-size: larger;">STORE</li></a>
                </ul>
            </div>
            <div class="nav-giua ">
                <img src="/DUAN119112024_3/public/img/logo chuẩn.png">
            </div>
            <!--  -->
            <div class="nav-right">
                <div style="color: #fff; list-style-type: none; margin-top: -36px; display: flex; height: 100px; width: 100px;">
                    <!-- Icon search -->
                    <li class="icon" style="margin-left: 10px; margin-top: 56px;">
                        <i style="font-size: 20px;" class="fa-solid fa-search">
                            <form action="" id="search-box">
                                <input type="text" id="searchInput" placeholder="Tìm kiếm...">
                            </form>
                        </i>
                    </li>                                       
                    <!-- Icon user -->

                    <li class="icon" style="margin-left: 10px; margin-top: 56px;">
                        <i style="font-size: 20px; ; margin-left: 10px;" class="fa-solid fa-user">
                             <!-- Menu con -->
                            <ul class="user-menu">
                            <li><a href="app/views/login.php">Đăng nhập</a></li>
                                <li><a href="app/views/register.php">Đăng ký</a></li>
                                <li><a href="taikhoan.html">Tài khoản</a></li>
                            </ul>
                        </i>
                    </li>
                    
                    <!-- Icon giỏ hàng -->
                    <a href="">
                    <li class="icon" style="margin-left: 10px; margin-top: 56px;">
                        <i style="font-size: 20px; margin-left: 10px;" class="fa-solid fa-cart-shopping"></i>
                    </li>
                    </a>
                </div>
            </div>


            <style>
                /* Đặt màu trắng và kích thước cơ bản cho các biểu tượng */
                .icon i {
                    color: #fff;
                    transition: color 0.3s ease, transform 0.3s ease;
                }

                /* Hiệu ứng hover: thay đổi màu và phóng to */
                .icon:hover i {
                    color: #FAB302;
                    /* Đổi màu vàng khi hover */
                    transform: scale(1.2);
                    /* Phóng to nhẹ */
                }
            </style>

        </div>
        <hr>

               
        </div>
        <hr>

    
    <hr>
    </section>