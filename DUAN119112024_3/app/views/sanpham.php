<!--  Phân Tất Cả Sản Phẩm  -->
<link rel="stylesheet" href="public/css/sanpham.css  ?v= <php echo time(); >?">
<img style="width:100%; height: 658px;   object-fit: cover;" id="imge" onclick="changeIMG()" src="./public/img/bac5.webp">

<div class="container-all-products">
  <div class="tatcasp">TẤT CẢ SẢN PHẨM</div>
  <div class="boloc">
    <i class="fa-solid fa-filter"></i>
    <span style="margin-left: 10px">Bộ Lọc</span>

    <!-- Bộ lọc giá -->
    <div class="price-filter-container">
      <span>Giá</span>
      <i class="fa-solid fa-sort-down" style="color: #fff;" onclick="togglePriceFilter()"></i>
      <ul id="price-filter">
        <li data-min="200000" data-max="400000" onclick="applyPriceFilter(200000, 400000)">200,000 - 400,000 VND</li>
        <li data-min="500000" data-max="800000" onclick="applyPriceFilter(500000, 800000)">500,000 - 800,000 VND</li>
        <li data-min="800000" data-max="1000000" onclick="applyPriceFilter(800000, 1000000)">800,000 - 1,000,000 VND</li>
        <li data-min="1000000" data-max="1500000" onclick="applyPriceFilter(1000000, 1500000)">1,000,000 - 1,500,000 VND</li>
      </ul>
    </div>

    <!--  -->
    <div style="display: flex; margin-left: 30px">
      <span>Màu Sắc</span>
      <i style="margin-left: 10px" class="fa-solid fa-sort-down"></i>
    </div>
<!--  -->
    <div style="display: flex; margin-left: 30px">
      <span>Kích Thước</span>
      <i style="margin-left: 10px" class="fa-solid fa-sort-down"></i>
    </div>
  </div>
  <section id="product-list" class="box">
  <?php
// Kết nối cơ sở dữ liệu và lấy sản phẩm
require_once './app/Model/productModel.php';

$sanpham = new chitietmodel();
$danhsachSanPham = $sanpham->laysanpham();

// Lấy tham số từ URL
$idDanhMuc = isset($_GET['id']) ? intval($_GET['id']) : 0;
$minPrice = isset($_GET['min_price']) ? intval($_GET['min_price']) : 0;
$maxPrice = isset($_GET['max_price']) ? intval($_GET['max_price']) : PHP_INT_MAX;

// Lọc sản phẩm theo danh mục và giá
$filteredSanPham = array_filter($danhsachSanPham, function ($sp) use ($idDanhMuc, $minPrice, $maxPrice) {
    $isCategoryMatch = $idDanhMuc > 0 ? $sp['ID_DanhMuc'] == $idDanhMuc : true;
    $isPriceMatch = $sp['DonGia'] >= $minPrice && $sp['DonGia'] <= $maxPrice;
    return $isCategoryMatch && $isPriceMatch;
});

// Hiển thị sản phẩm sau khi lọc
if (!empty($filteredSanPham)) {
    foreach ($filteredSanPham as $sp) {
        echo "
        <div class='boxsp'>
            <!-- Thêm thẻ a quanh ảnh sản phẩm để chuyển đến trang chi tiết sản phẩm -->
            <a href='index.php?page=chitiet&id={$sp['ID_SanPham']}'>
                <img src='./public/img/{$sp['HinhAnh']}' alt='{$sp['TenSanPham']}' />
            </a>
            <span>{$sp['TenSanPham']}</span>
            <div style='display: flex; margin-right: 50px'>
                <span>" . number_format($sp['DonGia'], 0, ',', '.') . " VND</span>
            </div>
            <!-- Thêm thẻ a quanh nút Thêm vào Giỏ hàng -->
            <a href='./cart.php?action=add&id={$sp['ID_SanPham']}'>
                <button>Thêm Vào Giỏ Hàng</button>
            </a>
        </div>";
    }
} else {
    echo '<p style="color: #fff;">Không có sản phẩm nào phù hợp với bộ lọc hiện tại.</p>';
}
?>
<section>
</div>
    
   

<script>
  // Hiển thị / Ẩn menu lọc giá
  function togglePriceFilter() {
    const filter = document.getElementById('price-filter');
    filter.style.display = filter.style.display === 'block' ? 'none' : 'block';
  }

  // Lọc sản phẩm bằng cách thay đổi URL
  function applyPriceFilter(min, max) {
    const urlParams = new URLSearchParams(window.location.search);
    urlParams.set('min_price', min);
    urlParams.set('max_price', max);
    window.location.search = urlParams.toString();
  }

  // Ẩn menu lọc khi nhấp bên ngoài
  document.addEventListener('click', function (event) {
    const filter = document.getElementById('price-filter');
    if (!filter.contains(event.target) && event.target.className !== 'fa-sort-down') {
      filter.style.display = 'none';
    }
  });
<!-- </script>

  <script> -->
    document.querySelector(".fa-sort-down").addEventListener("click", function () {
      const filter = document.getElementById("price-filter");
      filter.style.display = filter.style.display === "block" ? "none" : "block";
    });

    document.querySelectorAll("#price-filter li").forEach(function (item) {
      item.addEventListener("click", function () {
        const min = this.getAttribute("data-min");
        const max = this.getAttribute("data-max");

        // Gửi yêu cầu AJAX đến server để lọc sản phẩm
        fetch(`filter.php?min=${min}&max=${max}`)
          .then(response => response.text())
          .then(data => {
            document.getElementById("product-list").innerHTML = data;
          });
      });
    });
  </script>

  

  </body>

  </html>