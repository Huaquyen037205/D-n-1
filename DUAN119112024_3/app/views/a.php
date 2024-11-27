<!--  Phân Tất Cả Sản Phẩm  -->
<link rel="stylesheet" href="./public/css/sanpham.css ?v= <php echo time(); >?">

<div class="container-all-products">
  <div class="tatcasp">TẤT CẢ SẢN PHẨM</div>
  <div class="boloc">
    <i class="fa-solid fa-filter"></i>
    <span style="margin-left: 10px">Bộ Lọc</span>

    <div style="display: flex; margin-left: 30px">
      <span>Giá</span>
      <i style="margin-left: 10px" class="fa-solid fa-sort-down"></i>
      <ul id="price-filter"
        style="list-style: none; display: none; position: absolute; background: #000; border: 1px solid #ccc; padding: 20px; width:230px; line-height: 30px; margin-top: 30px; ">
        <li data-min="20000" data-max="100000">200,000 - 400,000 VND</li>
        <li data-min="100000" data-max="300000">500,000 - 800,000 VND</li>
        <li data-min="300000" data-max="400000">800,000 - 1,000,000 VND</li>
        <li data-min="400000" data-max="1000000">400,000 - 1,500,000 VND</li>
      </ul>
    </div>

    <div style="display: flex; margin-left: 30px">
      <span>Màu Sắc</span>
      <i style="margin-left: 10px" class="fa-solid fa-sort-down"></i>
      <ul id="price-filter"
        style="list-style: none; display: none; position: absolute; background: #000; border: 1px solid #ccc; padding: 20px; width:230px; line-height: 30px; margin-top: 30px; ">
        <li data-min="200000" data-max="400000">200,000 - 400,000 VND</li>
        <li data-min="500000" data-max="800000">500,000 - 800,000 VND</li>
        <li data-min="800000" data-max="1000000">800,000 - 1,000,000 VND</li>
        <li data-min="400000" data-max="1500000">400,000 - 1,500,000 VND</li>
      </ul>
    </div>

    <div style="display: flex; margin-left: 30px">
      <span>Kích Thước</span>
      <i style="margin-left: 10px" class="fa-solid fa-sort-down"></i>
      <ul id="color-filter"
        style="list-style: none; display: none; position: absolute; background: #000; border: 1px solid #ccc; padding: 20px; width:230px; line-height: 30px; margin-top: 30px;">
        <li data-color="red" style="color: red;">Red</li>
        <li data-color="blue" style="color: blue;">Blue</li>
        <li data-color="green" style="color: green;">Green</li>
        <li data-color="black" style="color: black;">Black</li>
        <li data-color="white" style="color: white;">White</li>
      </ul>

    </div>
  </div>
  <section class="box">
  <?php
// Lấy danh sách sản phẩm và danh mục từ cơ sở dữ liệu
require_once './app/Model/productModel.php';
require_once './app/Model/danhmucModel.php'; // Thêm model Danhmuc

$sanpham = new chitietmodel();
$danhsachSanPham = $sanpham->laysanpham(); // Lấy tất cả sản phẩm

// Lấy ID danh mục từ URL
$idDanhMuc = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Kiểm tra nếu có ID danh mục
if ($idDanhMuc > 0) {
    // Lọc sản phẩm theo ID danh mục
    $filteredSanPham = array_filter($danhsachSanPham, function($sp) use ($idDanhMuc) {
        return $sp['ID_DanhMuc'] == $idDanhMuc;
    });

    // Hiển thị sản phẩm theo danh mục
    if (!empty($filteredSanPham)) {
        foreach ($filteredSanPham as $sp) {
            echo '
            <div class="boxsp">
                <img src="./public/img/' . $sp['HinhAnh'] . '" alt="' . $sp['TenSanPham'] . '" />
                <span>' . $sp['TenSanPham'] . '</span>
                <div style="display: flex; margin-right: 50px">
                    <span>' . number_format($sp['DonGia'], 0, ',', '.') . ' VND</span>
                    <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
                </div>
                <button>Thêm Vào Giỏ Hàng</button>
            </div>';
        }
    } else {
        echo "<p>Không có sản phẩm nào trong danh mục này.</p>";
    }
} else {
    // Hiển thị tất cả sản phẩm nếu không có ID danh mục
    foreach ($danhsachSanPham as $sp) {
        echo '
        <div class="boxsp">
            <img src="./public/img/' . $sp['HinhAnh'] . '" alt="' . $sp['TenSanPham'] . '" />
            <span>' . $sp['TenSanPham'] . '</span>
            <div style="display: flex; margin-right: 50px">
                <span>' . number_format($sp['DonGia'], 0, ',', '.') . ' VND</span>
                <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
            </div>
            <button>Thêm Vào Giỏ Hàng</button>
        </div>';
    }
}
?>

</section>

  <!--  -->
  <!-- <section class="box">
      <div class="boxsp">
        <img src="img/sp5.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>

      <div class="boxsp">
        <img src="img/sp6.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
      
      <div class="boxsp">
        <img src="img/sp7.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
      
      <div class="boxsp">
        <img src="img/sp8.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
    </section>
    
    <section class="box">
      <div class="boxsp">
        <img src="img/sp8.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
      
      <div class="boxsp">
        <img src="img/sp9.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
      
      <div class="boxsp">
        <img src="img/sp10.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
      
      <div class="boxsp">
        <img src="img/sp11.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
    </section>
    
    <section class="box">
      <div class="boxsp">
        <img src="img/sp5.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
      
      <div class="boxsp">
        <img src="img/sp6.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div> -->

  <!-- <div class="boxsp">
        <img src="img/sp7.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div> -->
  <!--  -->
  <!-- <div class="boxsp">
        <img src="img/sp8.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div>
    </section> -->
  <!--  -->
  <!-- <section class="box"> -->
  <!-- <div class="boxsp">
        <img src="img/sp8.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div> -->
  <!--  -->
  <!-- <div class="boxsp">
        <img src="img/sp9.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div> -->
  <!--  -->
  <!-- <div class="boxsp">
        <img src="img/sp10.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div> -->
  <!--  -->
  <!-- <div class="boxsp">
        <img src="img/sp11.webp" />
        <span>Áo Sơ Mi DRAGON BALL Z Goku Black</span>
        <div style="display: flex; margin-right: 50px">
          <span>3.200.000 VND</span>
          <span style="margin-left: 20px; color: #f44336">500.000 VND</span>
        </div>
        <button>Thêm Vào Giỏ Hàng</button>
      </div> -->
  <!-- </section> -->


  <script>
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