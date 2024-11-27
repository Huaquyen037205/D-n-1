<link rel="stylesheet" href="./public/css/body.css ?v= <php echo time(); >?">
<img style="width:100%; height: 658px;   object-fit: cover;" id="imge" onclick="changeIMG()" src="./public/img/bac5.webp">

<section class="promotion">
        <div class="promo-item">
            <img src="./public/img/hinh4.jpg" alt="Promo 1">
            <div class="promo-text">
                <p>20% OFF</p>
                <h2>TẤT CẢ SẢN PHẨM TẠI 10.10</h2>
                <a href="#">Khám phá</a>
            </div>
        </div>
        <div class="promo-item">
            <img src="./public/img/hinh2.jpg" alt="Promo 2">
            <div class="promo-text">
                <p>50% OFF</p>
                <h2>CÁC ITEM CŨ</h2>
                <a href="#">Khám phá</a>
            </div>
        </div>
    </section>


    <section class="countdown" >
        <!-- <p>Khuyến mãi giới hạn</p> -->
        <div class="title-bar">
                <div class="title">
                   GIẢM GIÁ SALE UP TO 50%
                </div>
                <div class="count-down" >
                    <div class="count-down-cell">
                        <span class="hour"></span>
                    </div>
                    <span class="two-dots">:</span>
                    <div class="count-down-cell">
                        <span class="min"></span>
                    </div>
                    <span class="two-dots">:</span>
                    <div class="count-down-cell">
                        <span class="sec"></span>
                    </div>
                </div>
            </div>
    </section>


<?php
include_once './app/Model/HomeModel.php'; // Đường dẫn đến HomeModel

$homemodel = new HomeModel();
$homemodel->dssp(); // Lấy danh sách sản phẩm
?>

<div class="container">
<?php
if (!empty($homemodel->mangsp)) {
    foreach ($homemodel->mangsp as $product) { ?>
        <div class="product-box">
            <!-- Link ảnh sản phẩm để chuyển đến trang chi tiết -->
            <a href="index.php?page=chitiet&id=<?php echo $product['ID_SanPham']; ?>">
                <img src="/DUAN119112024/public/img/<?php echo htmlspecialchars($product['HinhAnh']); ?>" 
                     alt="<?php echo htmlspecialchars($product['TenSanPham']); ?>">
            </a>
            <p class="product-name"><?php echo htmlspecialchars($product['TenSanPham']); ?></p>
            <p class="product-price"><?php echo number_format($product['DonGia'], 0, ',', '.'); ?> VND</p>
            
            <!-- Link "Thêm vào giỏ hàng" -->
            <a href="index.php?page=giohang1_function&action=add&id=<?php echo $product['ID_SanPham']; ?>">
                <button>Thêm vào giỏ hàng</button>
            </a>
        </div>
    <?php }
} else {
    echo "<p>Không có sản phẩm nào.</p>";
}
?>

</div>



<div class="tintuc">

<div class="tin1">
    <img style="width: 40%;height: 357px" src="./public/img/tin11.webp">
    <img style="width: 60%; height: 100%;" src="./public/img/tin2.webp">
</div>

<div class="tin2">
    <img style="width: 20%;" src="./public/img/tin3.webp">
    <img style="width: 20%;" src="./public/img/tin4.webp">
    <img style="width: 60%;" src="./public/img/tin5.webp">
</div>
</div>

