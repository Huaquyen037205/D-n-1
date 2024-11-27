<?php
session_start();
ob_start();

// Xử lý khi người dùng xóa toàn bộ giỏ hàng
if (isset($_GET['ma']) && $_GET['ma'] == 'xoatoanbo') {
    unset($_SESSION['giohang1']); // Xóa toàn bộ giỏ hàng
    header('Location: giohang1.php');
    exit();
}
// if (isset($_GET['ma']) && $_GET['ma'] == 'xoagh') {
//     session_unset();
//     session_destroy();
//     header('location: giohang1.php');
// }

// Xử lý khi người dùng thêm sản phẩm vào giỏ hàng
if (isset($_POST['themgh']) && $_POST['themgh']) {
    $img = $_POST['img'];
    $p = $_POST['p'];
    $gia = $_POST['gia'];
    $id = $_POST['id'];
    $pt = ['img' => $img, 'id' => $id, 'p' => $p, 'gia' => $gia, 'sl' => 1];

    $fl = 0;
    if (isset($_SESSION['giohang1']) && $_SESSION['giohang1'] != null) {
        foreach ($_SESSION['giohang1'] as &$item) {
            if ($item['id'] == $id) {
                $item['sl']++;
                $fl = 1;
                break;
            }
        }
    }

    if ($fl == 0) {
        $_SESSION['giohang1'][] = $pt;
    }
    header('location: giohang1.php');
    exit();
}

// Xử lý khi người dùng xóa toàn bộ số lượng hoặc xóa 1 số lượng của một sản phẩm
if (isset($_GET['ma']) && $_GET['ma'] == 'xoa1') {
    $id = $_GET['id'];

    if ($_SESSION['giohang1'] != null) {
        foreach ($_SESSION['giohang1'] as $key => $item) {
            if ($item['id'] == $id) {
                if ($item['sl'] == 1) {
                    unset($_SESSION['giohang1'][$key]);
                } else {
                    $_SESSION['giohang1'][$key]['sl']--;
                }
                break;
            }
        }
    }

    header('location: giohang1.php');
    exit();
}

// Hiển thị giỏ hàng
function showgh()
{
    $ch = '';
    $tong = 0;
    if (isset($_SESSION['giohang1']) && $_SESSION['giohang1'] != null) {
        foreach ($_SESSION['giohang1'] as $x) {
            $tt = $x['sl'] * $x['gia'];

            $ch .= '<div class="b-group">
                        <div class="b-group-body">
                            <div class="b-g-item">
                                <img src="' . $x['img'] . '" alt="" class="item-img" />
                                <p><a href="./detail.html" class="item-link" style="font-size: 18px; color:darkgray;">' . $x['p'] . '</a></p>
                            </div>
                            <div class="b-g-item"><span style="font-size: 18px; color:darkgray;" class="price" style="font-size: 18px; ">' . $x['gia'] . '.000 VND</span></div>
                            <div class="b-g-item" >
                            
                                <a style="padding: 10px; text-decoration:none;color:darkgray;" href="giohang1.php?ma=tru&id=' . $x['id'] . '">-</a>
                                <div class="count-number" style="font-size: 18px; color:darkgray;">' . $x['sl'] . '</div>
                                <a style="padding: 10px; text-decoration: none ; color:darkgray;"  href="giohang1.php?ma=cong&id=' . $x['id'] . '">+</a>
                            </div>
                           
                           
                            <div class="b-g-item"><div class="item-total" style="font-size: 18px; color:darkgray;">' . $tt . '.000 VND</div></div>
                            <div class="b-g-item item-last">
                                <p class="item-delete"><a style="font-size: 18px; text-decoration: none; color:darkgray;" href="giohang1.php?ma=xoa1&id=' . $x['id'] . '">Xóa</a></p>
                            </div>
                        </div>
                    </div>';
            $tong += $tt;
        }
    } else {
        $ch .= 'Giỏ hàng rỗng';
    }

    $ch .= '<div class="b-group">
  
     <div style="color:#fff; margin-left:400px"> Cập nhật giỏ hàng || Tiếp tục mua</div>
     <br>
     <br>
     <hr>
                <div class="b-g-end">
                    <div class="b-g-end-left"></div>
                    <div class="b-g-end-right">
               <hr>
          
                        <p>Tổng thanh toán (<span class="count" style="font-size: 18px; color:darkgray;">' . count($_SESSION['giohang1']) . '</span> Sản phẩm):</p>
                        <div class="total-price pay" style="font-size:21px";>' . $tong . '.000 VND</div>
                        <a href="tinhtien3.html" class="price-btn" style="font-size: 18px; color:darkgray;">Mua Hàng</a>
                      
                    </div>
                </div>
            </div>';

    return $ch;
}

// Xử lý chức năng tăng/giảm số lượng sản phẩm
if (isset($_GET['ma']) && ($_GET['ma'] == 'tru' || $_GET['ma'] == 'cong')) {
    $id = $_GET['id'];
    if (isset($_SESSION['giohang1'])) {
        foreach ($_SESSION['giohang1'] as &$item) {
            if ($item['id'] == $id) {
                if ($_GET['ma'] == 'tru' && $item['sl'] > 1) {
                    $item['sl']--;
                } elseif ($_GET['ma'] == 'cong') {
                    $item['sl']++;
                }
            }
        }
    }
    header('Location: giohang1.php');
    exit();
}
