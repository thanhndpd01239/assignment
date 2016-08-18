<?php include "lib/config.php"; ?>
<meta charset="UTF-8">
<title>Đ.Thành Fashions</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<main>
    <?php include("temp/header.php")  ;?>
    <section>                                
        <article id="rightdangky">
            <?php
            if(isset($_POST['dangky'])){ 
                $tdn=$_POST['tendn'];
                $password=($_POST['pass1']);
                $verify_password=($_POST['pass2']);                
                $hvten=$_POST['hovaten'];
                $ngaysinh=$_POST['ngaysinh'];                
                $gioitinh=$_POST['gioitinh'];
                $email=$_POST['email'];
                $nphone=$_POST['sdt'];
                $addr=$_POST['diachi'];                
                // kiêm tra hợp lệ form
                if (!$tdn || !$password || !$verify_password || !$hvten || !$ngaysinh || !$gioitinh || !$email || !$nphone){
                    echo '<span style="float:left; font-weight: bold; text-align:center; width: 100%; margin: 20px 0;">Vui lòng nhập đầy đủ thông tin.</span>';
                }
                // kiểm tra tài khoản tồn tại
                if (mysql_num_rows(mysql_query("SELECT user FROM taikhoan WHERE user='$tdn'")) > 0){
                    echo '<span style="float:left; font-weight: bold; text-align:center; width: 100%; margin: 20px 0;">Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác.</span>';
                }
                // kiêm tra mật khẩu hợp lệ
                if ( $password != $verify_password ){
                    echo '<span style="float:left; font-weight: bold; text-align:center; width: 100%; margin: 20px 0;">Mật khẩu không giống nhau, bạn hãy nhập lại mật khẩu.</span>';
                }
                // Kiểm tra email tồn tại
                if ( mysql_num_rows(mysql_query("SELECT email FROM taikhoan WHERE email='$email'"))>0){
                    echo '<span style="float:left; font-weight: bold; text-align:center; width: 100%; margin: 20px 0;">Email này đã có người dùng, Bạn vui lòng chọn Email khác.</span>';
                }
                // tạo tài khoản
                @$taotk=mysql_query("INSERT INTO taikhoan (user, pass, fullname, phonenumber, email, address, birthday, gioitinh) VALUES ('{$tdn}', '{$password}', '{$hvten}', '{$nphone}', '{$email}', '{$addr}', '{$ngaysinh}', '{$gioitinh}')");
                // Thông báo hoàn tất việc tạo tài khoản
                if ($taotk)
                    echo "<span style='float:left; font-weight: bold; text-align:center; width: 100%; margin: 20px 0;'>Tài khoản {$tdn} đã được tạo. <a href='index.php'>Nhấp vào đây để đăng nhập</span></a>";
                else
                    echo "<span style='float:left; font-weight: bold; text-align:center; width: 100%; margin: 20px 0;'>Có lỗi trong quá trình đăng kí, Vui lòng liên hệ BQT</span>";
            }
            ?> 
            <form action="" method="POST" name="myForm" onsubmit="return validateForm()" > 
                <h3 style="text-align: center;color:blue">Đăng ký thành viên</h3>
                <table style="width: 350px;margin: auto"> 
                    <tr>
                        <td width="118" style="width: 50%;">Tên Đăng nhập:</td> <style>td{padding-top: 20px;}</style>
                        <td width="320"><input name="tendn" type="text" required /></td>
                    </tr>
                    <tr>
                        <td>Mật khẩu:</td>
			<td><input type="password" name="pass1" value=""></td>
                    </tr>
                    <tr>
                        <td>Xác nhận mật khẩu:</td>
                        <td><input type="password" name="pass2" value=""></td>
                    </tr>
                    <tr>
                        <td>Họ và tên:</td>
                        <td><input name="hovaten" type="text" required /></td>
                    </tr>
                    <tr>
                        <td>Ngày Sinh</td>
                        <td><input name="ngaysinh" type="date" ></td>
                    </tr>
                    <tr>
                        <td>Giới tính:</td>
                        <td><input id="ck" name="gioitinh" type="radio" value="Nam" checked="" /> Nam
                            <input id="tt" name="gioitinh" type="radio" value="Nữ" /> Nữ
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input name="email" type="email"  /></td>
                    </tr>
                    <tr>
                        <td>Số Điện Thoại:</td>
                        <td><input maxlength="12/" name="sdt" type="text"  /></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ:</td>
                        <td><input name="diachi" type="text" required /></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: center;">
                            <input name="dangky" type="submit" value="Đăng ký" style="width: 100px; height: 40px; cursor: pointer" />
                            <input name="Reset" type="reset" value="Nhập lại" style="width: 100px; height: 40px; cursor: pointer"/>
                        </td>
                    </tr>
                </table>
            </form>
        </article>
        <?php include("temp/footer.php")  ;?> 
    </section>
</main>
