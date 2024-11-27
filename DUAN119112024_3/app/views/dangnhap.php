<hr>



<div style="margin-left: 710px; font-size:25px; color:#fff; margin-top: 100px; margin-bottom: 20px; ">
  <p>Tạo tài khoản</p>
</div>
<section>

  <form action="dangnhap.php" method="post" style="margin-left: 530px;">



    <!-- <i class="fa-solid fa-user"></i> -->
    <label style=" height: 50px;margin-top: 10px;" class="input-field">
      <input style="  border-radius: 0px;  width: 500px; height: 55px;border: 1px solid darkgray;
    " type="text" class="input" name="phone" placeholder="phone" required>

    </label>
    <br>
    <!-- <i class="fa-solid fa-phone"></i> -->
    <label style=" height: 50px; margin-top: 10px;" class="input-field">
      <input style="  border-radius: 0px; width: 500px;height: 55px;border: 1px solid darkgray;
    " type="password" class="input" name="pass" placeholder="Password" required>


    </label>

    <br>
    <!-- <i class="fa-solid fa-lock"></i> -->
    <label style=" height: 50px ; margin-top: 10px;" class="input-field">
      <input style="  border-radius: 0px;  width: 500px; height: 55px;border: 1px solid darkgray;
    " name="dk" type="submit" class="submit" value="Login">

    </label>
  </form>


  <?php
  session_start(); // Bỏ dấu chú thích ở dòng này

  if (isset($_POST['phone']) && isset($_POST['pass'])) {
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];
    $pt = ['phone' => $phone, 'pass' => $pass];

    include 'dangnhap_funcion.php';
    echo dangnhap($pt);
  }

  // Trong hàm dangnhap
  function dangnhap($pt)
  {
    if (!isset($_SESSION['user']) || empty($_SESSION['user'])) {
      return '<div class="error-message">Không tìm thấy tài khoản. Vui lòng đăng ký trước.</div>';
    } else {
      foreach ($_SESSION['user'] as $user) {
        if ($user['phone'] == $pt['phone'] && $user['pass'] == $pt['pass']) {
          return '<div class="success-message">Đăng nhập thành công!</div>';
        }
      }
      return '<div class="error-message">Số điện thoại hoặc mật khẩu không hợp lệ. Vui lòng thử lại.</div>';
    }
  }
  ?>





</section>
</section>


<div class="contact">