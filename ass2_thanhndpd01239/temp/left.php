<?php include "lib/mysql.php"; ?>
<style>
.cart-view-table-front table tbody tr.even, .cart-view-table-back table tbody tr.even{
    background-color: #F7F7F7;
}
.cart-view-table-front table tbody tr.odd, .cart-view-table-back table tbody tr.odd{
    background-color: #E0E0E0;
}   
</style>
<article id="left"> 
    <aside class="leftofleft leftone">
        <?php                 
            if(isset($_SESSION['user'])){
            echo '<span style="color:black;margin-left:0px;font-size:20px;">Chào '.$_SESSION['user'].'</span>';
        ?>
            <table><tr><td style="padding-top: 0px;"><a onclick="return confirm('Bạn chắc chắn muốn thoát không ?')" href="logout.php" style="margin-left: 20px;color: black;text-decoration: none;">Đăng xuất</a></td></tr></table>
        <?php
            }else{                       
                if(isset($_POST['login'])){
                    $tk=$_POST['user'];
                    $mk=$_POST['pass'];
                    $sql1="select * from taikhoan where user='$tk' && pass='$mk'";
                    $result1=$conn->query($sql1);                            
                    $row1 = $result1->fetch_assoc();
                    if($row1['user']!=$tk){
                    echo "<h3 style='font-size:11px;margin:0;'>Tài khoản hoặc mật khẩu không chính xác!</h3>";
                    }else {
                    if($row1['level']==1){
                        header("location:index.php");
                        $_SESSION['user']=$_POST['user'].'<table><tr><td style="float:left;margin-left:20px;color:red;text-decoration: none;"><b style="margin-left: 20px;">Quản lý</b></strong></td></tr><tr><td><a href="admin/control.php" style="float:left;margin-left:20px;color:green;text-decoration: none;">Vào trang quản trị</a></strong></td></tr><tr><td><a href="#" style="float:left;margin-left:20px;color:green;text-decoration: none;">Thông tin cá nhân</a></strong></td></tr></table>';

                    }  if($row1['level']==2){
                        header("location:index.php?id=".$row1['level']);
                        $_SESSION['user']=$_POST['user'].'<table><tr><td style="float:left;margin-left:20px;color:red;text-decoration: none;"><b>Nhân viên</b></strong></td></tr><tr><td><a href="admin/control.php" style="float:left;margin-left:20px;color:green;text-decoration: none;">Vào trang quản trị</a></strong></td></tr><tr><td><a href="#" style="margin-left:20px;color:green;text-decoration: none;">Thông tin cá nhân</a></strong></td></tr></table>';
                        }   if($row1['level']<1){
                            header("location:index.php?id=".$row1['level']);
                            $_SESSION['MAKH']=$row1['matk'];
                            $_SESSION['user']=$_POST['user'].'<table><tr><td><a href="#" style="margin-left:20px;color:green;text-decoration: none;">Thông tin khách hàng</a></strong></td></tr></table>';
                            
                            
                        }                            
                    }
                }
            ?>
            <form action="index.php" method="post">
                <table id="tblogin">
                    <tr>
                        <td colspan="2"><input type="text" name="user" required placeholder="Tài khoản" /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="pass" required placeholder="Mật khẩu" /></td>
                    </tr>
                    <tr>
                        <td><input type="button" title="Đăng nhập" onclick="location.href='register.php'" value="" style="width: 95px;height: 32px;cursor: pointer;background-image: url(image/register.png);"></td>
                        <td><input type="submit" name="login" title="Đăng nhập" value="" style="width: 95px;height: 32px;cursor: pointer;background-image: url(image/login.png);"></td>
                    </tr>
                </table>
            </form>
        <?php
            }
        ?>
    </aside>
    <aside class="leftofleft lefttwo">
        <h1>Sản phẩm</h1>
        <ul>
            <li><a href="shirt.php"><img src="image/iconsao.png" alt=""/>Nam</a></li>
            <li><a href="trousers.php"><img src="image/iconsao.png" alt=""/>Nữ</a></li>
            <li><a href="shoes.php"><img src="image/iconsao.png" alt=""/>Giày nam</a></li>
            <li><a href="fittings.php"><img src="image/iconsao.png" alt=""/>Giày nữ</a></li>
        </ul>                                                 
    </aside>
    <aside class="leftofleft lefttwo">
        <h1>Giỏ hàng</h1>
        <ul>            
            <?php
            if(isset($_SESSION['MAKH'])){
            if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0){
                echo '<div class="cart-view-table-front" id="view-cart">';
                echo '<form method="post" action="cart/cart_update.php">';
                echo '<table width="100%"  cellpadding="6" cellspacing="0">';
                echo '<tr style="font-size:14px;"><td>Số lượng |</td><td>Tên SP</td><td>| Xóa</td></tr>';
                echo '<tbody>';
                $total =0;
                $b = 0;
                foreach ($_SESSION["cart_products"] as $cart_itm)
                {
                    $product_name = $cart_itm["product_name"];
                    $product_qty = $cart_itm["product_qty"];                    
                    $product_code = $cart_itm["product_code"];
                    $bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe
                    echo '<tr class="'.$bg_color.'">';
                    echo '<td><input type="text" style="width:25px;" size="1" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
                    echo '<td>'.$product_name.'</td>';
                    echo '<td><button name="remove_code[]" value="'.$product_code.'">Xóa</button></td>';
                    echo '</tr>';
                }
                echo '<td colspan="4">';
                echo '<button type="submit" style="padding: 5px 13px;border-radius: 5px;float:left;cursor: pointer;text-decoration: none;color: #085;background: rgb(224, 203, 203);">Cập nhật</button><a href="giohang.php"  style="padding: 5px 13px;border-radius: 5px;margin-top:3px;float:left;text-decoration: none;color: #085;background: rgb(224, 203, 203);">Chi tiết giỏ hàng</a>';
                echo '</td>';
                echo '</tbody>';
                echo '</table>';	
                echo '<input type="hidden" name="return_url" value="" />';
                echo '</form>';
                echo '</div>';
            }else{ 
                echo '<aside style="font-size:12px;text-align:center;">Giỏ hàng chưa có sản phẩm</aside>';
            }}
 else {
    echo '<aside style="font-size:12px;text-align:center;">Bạn phải đăng nhập để mua hàng</aside>';
 }
            ?>
        </ul>                                                 
    </aside>
    <aside class="leftofleft lefttwo">
        <h1>Hỗ trợ trực tuyến</h1>
        <ul>
            <li style="text-align: center;"><a href="#">Tư vấn sản phẩm</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Đức Thành - 0905098817</a></li>
            <li><a href="https://www.facebook.com/PD01239"><i class="fa fa-facebook-square" aria-hidden="true"></i> Nguyễn Thành</a></li>
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> thanhnd@gmail.com</a></li>                            
            <li class="titleleft"><a href="#"></a></li>
            <li style="text-align: center;"><a href="#">Hỗ trợ khách hàng</a></li>
            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Đức Thành - 0905098817</a></li>
            <li><a href="https://www.facebook.com/PD01239"><i class="fa fa-facebook-square" aria-hidden="true"></i> Nguyễn Thành</a></li>
            <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> thanhnd@gmail.com</a></li>
        </ul>                                                 
    </aside>
</article>