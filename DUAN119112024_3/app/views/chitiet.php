<?php
require_once './app/Model/productModel.php';
$data = new chitietmodel();

// Sanitize and validate the product ID from the GET request
if (isset($_GET['id'])) {
    $idPro = intval($_GET['id']); // Convert to integer to prevent injection
    $dataPro = $data->chitietsp($idPro);
} else {
    echo 'Không có mã sản phẩm.';
}
$dataPro = $data->chitietsp($idPro);

// Kiểm tra xem $dataPro có dữ liệu và mảng con tại chỉ mục 0 hay không
if ($dataPro && isset($dataPro[0])) {
    // Truy cập vào thông tin sản phẩm trong phần tử đầu tiên của mảng
    $product = $dataPro[0];
    extract($product); // Giờ bạn có thể truy cập trực tiếp vào $TenSanPham, $HinhAnh, v.v.
    // echo $TenSanPham;  // In ra "Frayed Logos Denim Jacket - Blue Wash"
} else {
    echo 'Sản phẩm không tồn tại';
}
?>


<!-- Hiển thị thông tin chi tiết sản phẩm -->
<link rel="stylesheet" href="./public/css/chitiet.css ?v=<?= time(); ?>">

<div class="container">
    <div class="product-image">
        <img id="main-image" src="./public/img/<?php echo $product['HinhAnh'] ?>" alt="Tên Sản Phẩm">

        <div class="product-thumbnails">
            <img src="./public/img/<?= $HinhAnh ?>" alt="Ảnh thu nhỏ 1"
                onclick="changeImage('./public/img/<?= $HinhAnh ?>')">
            <img src="./public/img/<?= $hinhcon2 ?>" alt="Ảnh thu nhỏ 2"
                onclick="changeImage('./public/img/<?= $hinhcon2 ?>')">
            <img src="./public/img/<?= $hinhcon3 ?>" alt="Ảnh thu nhỏ 3"
                onclick="changeImage('./public/img/<?= $hinhcon3 ?>')">
            <img src="./public/img/<?= $hinhcon4 ?>" alt="Ảnh thu nhỏ 4"
                onclick="changeImage('./public/img/<?= $hinhcon4 ?>')">
            <img src="./public/img/<?= $hinhcon5 ?>" alt="Ảnh thu nhỏ 5"
                onclick="changeImage('./public/img/<?= $hinhcon5 ?>')">
        </div>

        <script>
            function changeImage(imageSrc) {
                var mainImage = document.getElementById("main-image");
                mainImage.src = imageSrc;
            }
        </script>
        <div class="product-description">
            <h2>Mô tả sản phẩm</h2>
            <p>Tên sản phẩm: <?= $TenSanPham ?></p>
            <p>Chất liệu: Vải da & Da PU; chất liệu: Polyester.</p>
            <p>Thương hiệu: TAFs</p>
            <p>Dòng sản phẩm: LIMITED EDITION - CHỈ CÓ 120 CHIẾC</p>
            <p>Lưu ý: Màu sắc sản phẩm có thể khác trên ảnh do điều kiện ánh sáng khi chụp.</p>
        </div>
    </div>

    <div class="product-details">
        <div class="product-title" style="font-size:35px; "><?= $product['TenSanPham'] ?></div>
        <div class="product-rating">★★★★★</div>
        <div class="product-price" style="font-size:25px; width:50%;"><?= number_format($DonGia, 0, ',', '.') ?> VND</div>

        <div class="size-options">
            <div class="size-option selected">M</div>
            <div class="size-option">L</div>
            <div class="size-option">XL</div>
        </div>

        <div class="quantity-container">
            <div class="quantity-box">
                <button class="decrement">-</button>
                <input type="text" value="1" class="quantity-input">
                <button class="increment">+</button>
            </div>
            <a href="giohang.html" class="btn-add-to-cart">Thêm vào giỏ hàng</a>
        </div>

        <a href="thanhtoan.html" class="btn-buy-now">Mua ngay</a>

        <div class="additional-info">
            <div class="info-section">Thông tin thêm</div>
            <div class="info-section">Chính sách bảo hành</div>
            <div class="info-section">Hướng dẫn bảo quản sản phẩm</div>
        </div>

        <div class="size-chart">
            <h2>Bảng size</h2>
            <br>
            <img src="./public/img/boxy_shirt.webp" alt="Bảng size sản phẩm">
        </div>
    </div>
</div>
<hr >
<div class="related-products-container">
    <h2 class="related-title">Các sản phẩm liên quan</h2>
    <div class="box">
        <div class="boxsp">
            <img src="./public/img/lq1.png" alt="Sản phẩm liên quan 1">
            <span class="product-name">Áo Leather Biker Jacket</span>
            <span class="product-price">
                <span class="old-price">650,000 VND</span>
                <span class="new-price">550,000 VND</span>
            </span>
            <button>Thêm vào giỏ hàng</button>
        </div>
        <div class="boxsp">
            <img src="./public/img/lq2.png" alt="Sản phẩm liên quan 2">
            <span class="product-name">Áo Thương Bạn Trai</span>
            <span class="product-price">
                <span class="old-price">650,000 VND</span>
                <span class="new-price">550,000 VND</span>
            </span>
            <button>Thêm vào giỏ hàng</button>
        </div>
        <div class="boxsp">
            <img src="./public/img/lq3.png" alt="Sản phẩm liên quan 3">
            <span class="product-name">Quần Denim</span>
            <span class="product-price">
                <span class="old-price">650,000 VND</span>
                <span class="new-price">550,000 VND</span>
            </span>
            <button>Thêm vào giỏ hàng</button>
        </div>
        <div class="boxsp">
            <img src="./public/img/lq4.webp" alt="Sản phẩm liên quan 4">
            <span class="product-name">Áo Khoác Trắng</span>
            <span class="product-price">
                <span class="old-price">650,000 VND</span>
                <span class="new-price">550,000 VND</span>
            </span>
            <button>Thêm vào giỏ hàng</button>
        </div>
    </div>
</div>