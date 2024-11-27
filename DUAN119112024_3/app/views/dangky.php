<hr>



<section style="background-color: #000; height: 500px; position:;">
    <div style="margin-left: 710px; font-size:25px; color:#fff;   margin-bottom: 20px; background-color: #000;  ">
        <p style=" background-color: #000;">Tạo tài khoản</p>
    </div>
    <form action="dangky.php" method="post" style="margin-left: 530px; margin-top: 100px; ">

        <label style=" height: 50px; margin-top: 10px;" class="input-field">
            <input style="  border-radius: 0px;  width: 500px; height: 55px;border: 0.5px solid darkgray;
    " type="text" class="input" name="ten" placeholder="Fullname" required>

        </label>
        <br>
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
        <label style=" height: 50px;margin-top: 10px;" class="input-field">
            <input style="  border-radius: 0px;  width: 500px; height: 55px; border: 1px solid darkgray;
    " type="password" class="input" name="repass" placeholder="Password" required>

        </label>
        <br>
        <!-- <i class="fa-solid fa-lock"></i> -->
        <label style=" height: 50px ; margin-top: 10px; margin-bottom: 105px;" class="input-field">
            <input style="  border-radius: 0px;  width: 500px; height: 55px;border: 1px solid darkgray;
    " name="dk" type="submit" class="submit" value="Login">

        </label>
    </form>

    <hr>
    <?php

    if (isset($_POST['dk']) && $_POST['dk']) {
        $ten = $_POST['ten'];
        $phone = $_POST['phone'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];
        $pt = ['ten' => $ten, 'phone' => $phone, 'pass' => $pass, 'repass' => $repass];

        //  include 'dangky_funcion.php';
        echo dangky($pt);
    }
    ?>
</section>
</section>


<div class="contact">