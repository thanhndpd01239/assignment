<meta charset="utf-8">
<?php require("../lib/mysql.php"); ?>
<?php require("../lib/database.php"); ?>
<?php require("../lib/classuser.php"); ?>
<?php require("../lib/pagination_user.php"); ?>
<?php
    $Pagination = new Pagination();
    $User = new User(); 
    $limit = $Pagination->limit; 
    $stat = $Pagination->start();
    $totalRecord = $User->totalRecord(); 
    $totalPages = $Pagination->totalPages($totalRecord); 
    $listUsers = $User->listUsers($stat, $limit); 
?>                    
<table id="tblmember" width="100%" border="0">
  <tr class="title">
    <td width="28">Stt</td>
    <td width="155">Tài khoản</td>
    <td width="155">Mật khẩu</td>
    <td width="300">Họ và tên</td>
    <td width="55">Giới tính</td>
    <td width="54">Chức vụ</td>
    <td width="202">Số điện thoại</td>
    <td width="155">Ngày sinh</td>
    <td width="202">Email</td>
    <td width="202">Địa chỉ</td>
    <td width="35">Edit</td>
    <td width="36">Del</td>
  </tr>
  <?php $stt = 1; ?>
  <?php foreach($listUsers as $items){ ?>

  <tr>
    <td><?php echo $stt; ?></td>
    <td><?php echo $items['user']; ?></td>
    <td><?php echo $items['pass']; ?></td>
    <td><?php echo $items['fullname']; ?></td>
    <td><?php echo $items['gioitinh']; ?></td>
    <td><?php if($items['level'] == 1){ echo "<span class='red'>Quản lý</span>";}else{ echo "Khách hàng"; }?></td>
    <td><?php echo $items['phonenumber']; ?></td>
    <td><?php echo $items['birthday']; ?></td>
    <td><?php echo $items['email']; ?></td>
    <td><?php echo $items['address']; ?></td>
    <td><a href="control.php?id=<?php echo $items['matk']?>">Sửa</a></td>
    <td><a onclick="return confirm('Bạn có muốn xóa ?')" href="delete.php?id=<?php echo $items['matk']; ?>">Xóa</a></td>
  </tr>
  <?php $stt++; } ?>
</table>
<div id="pagination">
    <?php echo $Pagination->listPages($totalPages); ?>
</div><br/>
<article>
    <?php 
        if(isset($_POST['submit'])){
            $id=$_POST['mid'];
            $acc = $_POST['acc'];
            $passw = $_POST['passw'];
            $name = $_POST['name'];
            $gend = $_POST['gend'];
            $birtd = $_POST['birtd'];
            $level = $_POST['level'];
            $sdt = $_POST['sdt'];
            $email = $_POST['email'];
            $addr = $_POST['addr'];

            $sql = "update taikhoan set user = '$acc', pass = '$passw', fullname = '$name', phonenumber = '$sdt', email = '$email', address = '$addr', birthday = '$birtd', gioitinh = '$gend', level = '$level' where matk=".$id;
            $conn->query($sql);
            $conn->close();
	}
    ?>
    <?php 
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql = "select * from taikhoan where matk=".$id;
            $result = $conn->query($sql);
            $rowedit = $result->fetch_assoc();
            }
    ?>
    <form name="adduser" action="control.php" method="post">
        <fieldset style="width: 400px;margin: auto;">
            <legend style="text-align: center;font-size: 18px;">Sửa thông tinh thành viên</legend>
            <table>
                <tr>
                    <td>Tài khoản:</td>
                    <input type="hidden" name="mid"  value="<?php echo $rowedit['matk'] ?>" />
                    <td><input type="text" name="acc" required="required" value="<?php echo $rowedit['user'] ?>" size="25" /></td>                                     
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td><input type="text" name="passw" required="required" value="<?php echo $rowedit['pass'] ?>" size="25"/></td>                                        
                </tr>
                <tr>
                    <td>Họ và tên:</td>
                    <td><input type="text" name="name" value="<?php echo $rowedit['fullname'] ?>" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td>Nam: <input type="radio" name="gend" value="Nam" checked/> Nữ: <input type="radio" name="gend" value="Nữ"/></td>
                </tr>
                <tr>
                    <td>Ngày sinh:</td>
                    <td><input type="date" name="birtd" value="<?php echo $rowedit['birthday'] ?>" size="25" /></td>                                      
                </tr>
                <tr>
                    <td>Chức vụ:</td>
                    <td><select name="level">
                            <option value="1">Quản lý</option>
                            <option value="2">Khách hàng</option>
                       </select>
                    </td>                                        
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td><input type="text" name="sdt" value="<?php echo $rowedit['phonenumber'] ?>" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" value="<?php echo $rowedit['email'] ?>" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="addr" value="<?php echo $rowedit['address'] ?>" size="25" /></td>                                        
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Update" style="padding:10px 20px;font-weight: bold;" /></td>
                </tr>
            </table>                        
        </fieldset>
    </form>
</article>