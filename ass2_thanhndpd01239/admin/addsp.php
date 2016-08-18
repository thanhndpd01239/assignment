<script language="javascript" src="ckeditor/ckeditor.js" type="text/javascript"></script>
<meta charset="UTF-8">
<?php include "../lib/mysql.php"; ?>          
<h1 style="text-align:center; color:green;">Thêm sản phẩm mới</h1>                
<?php
   if(isset($_POST['themsp'])){
       if (($_FILES['img']['type'] != "image/gif") && ($_FILES['img']['type'] != "") && ($_FILES['img']['type'] != "image/jpeg")&& ($_FILES['img']['type'] != "image/pjpeg")&& ($_FILES['img']['type'] != "image/png")){
           echo "Ảnh Không Đúng Định Dạng ";
               }else if($_FILES['img']['size'] > 5000000){
               echo "Ảnh Quá Lớn !Ảnh Không Quá 5MB ";  
           }else{        
       $img=$_FILES['img']['name'];
       
       move_uploaded_file($_FILES['img']['tmp_name'],"../image/sanpham/".$img);
       $tensp=$_POST['tensp'];
       $giasp=$_POST['giasp'];
       $sizes=$_POST['size'];
       $madein=$_POST['made'];
       $thongtinhsp=$_POST['ttsp'];
       $ngaynhapsp=$_POST['ngaynhapsp'];
       $loaisp=$_POST['loaisp'];
       $giamgiasp=$_POST['giamgia'];

       $sql2= " insert into sanpham(iimages, productname, giaban, thongtinhsp, ngaynhap, loaisp, saleoff, size, madein) values ('$img','$tensp','$giasp','$thongtinhsp','$ngaynhapsp','$loaisp','$giamgiasp','$sizes', '$madein')";
       echo '<p style="color:red;text-align:center;font-size:18px;">Đăng sản phẩm thành công</p>';
       $conn->query($sql2);
       $conn->close();
       }   
   }
?>              
<form action="#" method="post" enctype="multipart/form-data" style="width: 610px;margin:0 auto 50px;">
   <table id="add">
       <tr>
           <td>Tên sản phẩm:</td>
           <td><br>Ảnh sảnh phẩm:</td>
       </tr>
       <tr>
           <td><input type="text" required name="tensp"/></td>
           <td><input type="file"  name="img" size="45" /></td>
       </tr>
       <tr>
           <td><br>Loại sản phẩm:</td>
           <td><br>Size:</td>
       </tr>
       <tr>
            <td>
                <select name="loaisp" style="width: 300px;height: 30px;">
                    <option value="1">Nam</option>
                    <option value="2">Nữ </option>
                    <option value="3">Giày nam</option>
                    <option value="4">Giày nữ</option>
               </select>
            </td>      
            <td><input type="text"  name="size" size="45" placeholder="M, L, XL, XL, XXL, 38, 39, 40, 41, 42, 43, 44" /></td>
       </tr>
       <tr>
           <td><br>Made in:</td>
           <td><br>Ngày nhập</td><td>
       </tr>
       <tr>
           <td><input type="text"  name="made" size="45" /></td>
           <td><input type="date" id="datepicker" required name="ngaynhapsp"/></td>
       </tr>
       <tr>
           <td><br>Giá Sản Phẩm:</td>
           <td><br>Giảm giá:</td>
       </tr>
       <tr>
           <td><input type="number" required name="giasp" placeholder="VNĐ"/></td>
           <td><input type="text" required name="giamgia" placeholder="%"/></td>
       </tr>
       <tr>
           <td><br>Thông tinh Sản Phẩm:</td>
       </tr>
       <tr>   
           <td colspan="2"><textarea rows="5" cols="35" required style="resize:none" name="ttsp" id="thanh"></textarea></td>
           <script type="text/javascript">CKEDITOR.replace('thanh'); </script>
       </tr>
       <tr>
           <td colspan="2"><br><input type="submit" value="Thêm sản phẩm" name="themsp" style="font-weight: bold;background: gray;color: white;font-size: 18px;height: 50px;width: 100%"></td>
       </tr>                        
   </table>
</form>
 