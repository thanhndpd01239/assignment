<?php include "lib/mysql.php"; ?>
<article id="left"> 
    <aside class="leftofleft leftone">
             <?php                 
                if(isset($_SESSION['user'])){

                echo '<span style="color:black;margin-left:0px;font-size:20px;color:blue;">Chào '.$_SESSION['user'].'</span>'
                            . '<table><tr><td style="padding-top: 0px;"><a href="logout.php" style="margin-left: 20px;color: black;">Đăng xuất</a></td></tr></table>';
                }else{                       
                    if(isset($_POST['login'])){
                        $tk=$_POST['user'];
                        $mk=$_POST['pass'];
                        $sql1="select * from taikhoan where user='$tk' && pass='$mk'";
                        $result1=$conn->query($sql1);                            
                        $row1 = $result1->fetch_assoc();
                        if($row1['user']!=$tk){
                         echo "<h3>Tài khoản hoặc mật khẩu không chính xác!</h3>";
                         }else {
                        if($row1['level']==1){
                            header("location:index.php");
                            $_SESSION['user']=$_POST['user'].'<table><tr><td><a href="admin/control.php" style="margin-left:20px;color:red">Quản trị</a></strong></td></tr></table>';

                        }  else {
                            header("location:index.php?id=".$row1['level']);
                             $_SESSION['user']=$_POST['user'].'<table><tr><td><a href="admin/profile.php" style="margin-left:20px;color:green;">Thông tin cá nhân</a></strong></td></tr></table>';
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
                            <td><a href="register.php" id="register" title="Đăng ký"><img src="image/register.png"></a></td>
                            <td><input type="submit" name="login" title="Đăng nhập" value="" style="width: 117px;height: 32px;cursor: pointer;background-image: url(image/login.png);"></td>
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
            <li><a href="#"><img src="image/iconsao.png" alt=""/>Áo váy</a></li>
            <li><a href="#"><img src="image/iconsao.png" alt=""/>Áo đầm</a></li>
            <li><a href="#"><img src="image/iconsao.png" alt=""/>Chân váy</a></li>
            <li><a href="fittings.php"><img src="image/iconsao.png" alt=""/>Phụ kiện</a></li>
            <li><a href="#"><img src="image/iconsao.png" alt=""/>Áo váy</a></li>
        </ul>                                                 
    </aside>
    <aside class="leftofleft lefttwo">
        <h1>Giỏ hàng</h1>
        <ul>
            
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