
    <!-- BẮT ĐẦU FOOTER -->
    
    </form>
            <br>
            <img src="./public/img/visa thanh tian.jpg" alt="">

        </div>
        <hr>
        <div class="footer3">
            <div class="contact">
                <span>Bạn cần hỗ trợ</span>
                <div class="phone">
                    <i class="fas fa-phone-alt"></i> <!-- Font Awesome icon for the phone -->
                    <span>(+84) 0355179373</span>
                </div>
            </div>
            <div class="logo">
            <img src="/DUAN119112024_3/public/img/logo chuẩn.png" alt="Logo" />

            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="footer2">
            <div class="column">
                <h3>KẾT NỐI VỚI CHÚNG TÔI</h3>
                <p>TAFS là brand phụ kiện thành lập bởi những người có niềm đam mê với
                    trang sức, yêu thích các chế tác được tạo ra từ đôi bàn tay thuần Việt,
                    mong muốn đưa các tác phẩm vươn tầm thế giới.</p>
                <h4>Hotline hỗ trợ:</h4>
                <li>- Hà Nội: 039.327.8668</li>
                <li>- Hồ Chí Minh: 0794.302.899</li>
                <li>Phản Ánh Chất Lượng Dịch Vụ : 0981.956.116</li>
                <li>Email: support@vansang</li>
            </div>

            <div class="column">
                <h3>CHĂM SÓC KHÁCH HÀNG</h3>
                <li>Hướng dẫn thanh toán</li>
                <li>Giao Hàng</li>
                <li>Chính sách bảo hành</li>
                <li>Chính sách đổi trả</li>
                <li>Chính sách bảo mật</li>
                <li>Bảng giá phí điều chỉnh sản phẩm</li>
            </div>

            <div class="column">
                <h3>VỀ CHÚNG TÔI</h3>
                <li> TAFS</li>
                <li> Hệ thống</li>
                <li> Tuyển dụng</li>
                <li>Menbership by TAFs</li>
            </div>
            <div class="column">
                <h3>DÀNH CHO KHÁCH HÀNG</h3>
                <li> Kiện thức thời trang</li>
                <li> Hướng dẫn bảo quản</li>
                <li> Hướng dẫn đo size</li>
            </div>
        </div>
    </div>


    <!-- KẾT THÚC FOOTER -->


    <script src="./public/js/hom.js"></script>
    <script src="./public/js/chitiet.js"></script>
</body>
<style>
    
.footer{
    background-color: #000000;
  
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
</html>