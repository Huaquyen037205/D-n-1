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
                <img src="./public/img/logo chuẩn.png">
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
        <?php 
        // include_once './app/Model/danhmucModel.php';
        require_once './app/Model/danhmucModel.php';
        $danhmuc = new DanhmucModel();
        $danhsachdanhmuc = $danhmuc->laydanhmuc();
        ?>
        <div class="menu">
            <ul>
                <li><a href="index.php?page=sanpham">PRODUTCS</a>
                    <ul class="submenu" style="padding-left:60px; margin-left:20px">
                        <?php
                        foreach ($danhsachdanhmuc as $item){
                            extract($item);
                          echo  '<li><a href="index.php?page=sanpham&id='.$ID_DanhMuc.'">'.$TenDanhMuc.'</a></li>';
                        //   echo '<li><a href="index.php?page=sanpham&id=' . $idDanhMuc . '">' . $TenDanhMuc . '</a></li>';
                        }
                        ?>
                    </ul>
                </li>
                <!-- <li> <a href="#">COLLAB</a></li> -->
                <li> <a href="#">ABOUT US</a></li>
                <li> <a href="#">CONTACT</a></li>
            </ul>
        </div>
        <hr>

    
    <hr>
    </section>