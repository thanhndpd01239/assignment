<title>Administrator - Đ.T Fashion</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<link href="../css/admin.css" rel="stylesheet" type="text/css"/>
<?php 
    include "../lib/mysql.php";
    session_start();
    if(isset($_SESSION['user'])){
?>
<article id="admleft">
    <aside id="admlogo">
        <h1><a href="../index.php" style="color: rgb(163, 98, 0);"><strong style="color: green">Đ.Thành</strong> Fashions </a></h1>
        <h3>
            <?php
                if(!isset($_SESSION['level']) != 1){
                    header("location:../index.php");
                }                               
                if(isset($_SESSION['user'])){
                echo "Chào ".$_SESSION['user'];}
            ?>
        </h3>
        <aside id="admnav"><a href="../index.php">Quay lại cửa hàng</a> | <a href="../logout.php" style="color: red;">Đăng xuất</a></aside>
    </aside>
</article>
<article id="admright">
    <img src="../image/content.jpg" alt="" width="100%" height="200px"/>
</article>
<article id="centerbottom">
    <article id="controlll">
        <div class="col-xs-3"> <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a class="aa" href="#adm" data-toggle="tab">Quản lý thành viên</a></li>
                <li><a class="aa" href="#prod" data-toggle="tab">Quản lý Sản phẩm</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content" >
                <div class="tab-pane active" id="adm"><?php include("edituser.php")  ;?></div>
                <div class="tab-pane" id="prod"><?php include "addsp.php"; ?></div>
                <div class="tab-pane" id="bill"><?php include "quanlysp.php"; ?></div>
            </div>
        </div> 
    </article>
</article>
<?php }  
else { ?>                                        
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
                        header("location:control.php");
                        $_SESSION['user']=$_POST['user'].'<table><tr><td style="float:left;margin-left:20px;color:red;text-decoration: none;"><b style="margin-left: 20px;">Quản lý</b></strong></td></tr><tr><td><a href="admin/control.php" style="float:left;margin-left:20px;color:green;text-decoration: none;">Vào trang quản trị</a></strong></td></tr><tr><td><a href="#" style="float:left;margin-left:20px;color:green;text-decoration: none;">Thông tin cá nhân</a></strong></td></tr></table>';

                    }  if($row1['level']==2){
                        header("location:../index.php?id=".$row1['level']);
                        $_SESSION['user']=$_POST['user'].'<table><tr><td style="float:left;margin-left:20px;color:red;text-decoration: none;"><b>Nhân viên</b></strong></td></tr><tr><td><a href="admin/control.php" style="float:left;margin-left:20px;color:green;text-decoration: none;">Vào trang quản trị</a></strong></td></tr><tr><td><a href="#" style="margin-left:20px;color:green;text-decoration: none;">Thông tin cá nhân</a></strong></td></tr></table>';
                        }   if($row1['level']<1){
                            header("location:../index.php?id=".$row1['level']);
                            $_SESSION['MAKH']=$row1['matk'];
                            $_SESSION['user']=$_POST['user'].'<table><tr><td><a href="#" style="margin-left:20px;color:green;text-decoration: none;">Thông tin khách hàng</a></strong></td></tr></table>';
                            
                            
                        }                            
                    }
                }
            ?>
            <form action="control.php" method="post">
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

<?php }?>