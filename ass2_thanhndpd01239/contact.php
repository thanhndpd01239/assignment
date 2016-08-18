<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Đ.Thành Fashions</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <main>
            <?php include("temp/header.php")  ;?>
            <section>                                
                <?php include("temp/left.php")  ;?>
                <article id="right">
                <?php
                    if(isset($_POST['dangky'])){       
                        $hvten=$_POST['hovt'];
                        $ngaysinh=$_POST['birthd'];
                        $gioitinh=$_POST['thanhToan'];
                        $email=$_POST['email'];
                        $nphone=$_POST['sdt'];
                        $comments=$_POST['comment'];
                        $sql6= " insert into tt_lienhe(name, birthday, gender, email, phonenumber, comment) values ('$hvten','$ngaysinh','$gioitinh','$email','$nphone','$comments')";
                        echo '<p style="color:red;text-align:center;font-size:18px;">Cảm ơn</p>';
                        $conn->query($sql6);
                        $conn->close();          
                 }
              ?> 
             <form action="#" method="post" name="myForm" onsubmit="return validateForm()" > 
                 <h3 style="text-align: center;color:blue">Thông tin liên hệ</h3>
                 <table style="width: 350px;margin: auto"> 
                     <tr>
                         <td width="118" style="width: 50%;padding-top: 20px;">Họ và tên:</td>
                         <td width="320"><input name="hovt" type="text" required /></td>
                     </tr>
                     <tr>
                         <td style="padding-top: 20px;">Ngày Sinh</td>
                         <td><input name="birthd" type="date" ></td>
                     </tr>
                     <tr>
                         <td style="padding-top: 20px;">Giới tính:</td>
                         <td><input id="ck" name="thanhToan" type="radio" value="Nam" checked="" /> Nam
                             <input id="tt" name="thanhToan" type="radio" value="Nữ" /> Nữ
                         </td>
                     </tr>
                     <tr>
                         <td style="padding-top: 20px;">Email:</td>
                         <td><input name="email" type="email"  /></td>
                     </tr>
                     <tr>
                         <td style="padding-top: 20px;">Số Điện Thoại:</td>
                         <td><input maxlength="11/" name="sdt" type="number"  /></td>
                     </tr>
                     <tr>
                         <td colspan="2" style="padding-top: 20px;">
                             <textarea name="comment" style="resize:none" rows="10" cols="32" placeholder="Vui lòng để lại ý kiến cá nhân để chúng tôi có thể hỗ trợ bạn."></textarea>
                         </td>
                     </tr>
                     <tr>
                         <td colspan="2" style="text-align: center;padding-top: 20px;">
                             <input class="dangky" name="dangky" type="submit" value="Gửi" class="button" onmouseover="style.color='#fff',style.background='#2A3E51'" onmouseout="style.color='#2A3E51',style.background='#f0f0f0'"/>
                             <input class="dangky" name="Reset" type="reset" value="Nhập lại" onmouseover="style.color='#fff',style.background='#2A3E51'" onmouseout="style.color='#2A3E51',style.background='#f0f0f0'"/>
                         </td>
                     </tr>
                 </table>
             </form>
             <aside>
                 <fieldset style="width: 415px;margin: 30px auto;">
                     <legend style="text-align: center;font-size: 18px;">Hỗ trợ Trực tuyến</legend>
                     <table id="tblcontact">
                         <tr style="text-align: center; font-weight: bold;">
                             <td>Tư vấn sản phẩm</td>
                             <td>Hỗ trợ khách hàng</td>
                         </tr>
                         <tr>
                             <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Đức Thành - 0905098817</a></td>
                             <td><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Đức Thành - 0905098817</a></td>
                         </tr>
                         <tr>
                             <td><a href="https://www.facebook.com/PD01239"><i class="fa fa-facebook-square" aria-hidden="true"></i> Nguyễn Thành</a></td>
                             <td><a href="https://www.facebook.com/PD01239"><i class="fa fa-facebook-square" aria-hidden="true"></i> Nguyễn Thành</a></td>
                         </tr>
                         <tr>
                             <td><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> thanhnd@gmail.com</a></td>
                             <td><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> thanhnd@gmail.com</a></td>
                         </tr>
                     </table>
                 </fieldset>
             </aside>                    
                </article>
                <?php include("temp/footer.php")  ;?> 
            </section>
        </main>
    </body>
</html>
