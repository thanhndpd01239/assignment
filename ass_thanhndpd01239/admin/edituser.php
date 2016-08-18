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
    <td width="300">Họ và tên</td>
    <td width="55">Giới tính</td>
    <td width="54">Chức vụ</td>
    <td width="202">Số điện thoại</td>
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
    <td><?php echo $items['fullname']; ?></td>
    <td><?php echo $items['gioitinh']; ?></td>
    <td><?php if($items['level'] == 1){ echo "<span class='red'>Admin</span>";}else{ echo "Member"; }?></td>
    <td><?php echo $items['phonenumber']; ?></td>
    <td><?php echo $items['email']; ?></td>
    <td><?php echo $items['address']; ?></td>
    <td><a href="#">Sửa</a></td>
    <td><a href="#">Xóa</a></td>
  </tr>
  <?php $stt++; } ?>
</table>
<div id="pagination">
    <?php echo $Pagination->listPages($totalPages); ?>
</div><br/>
<article>
    <form name="adduser" action="edit.php?id=<?php echo $row['id']; ?>" method="post">
        <fieldset style="width: 400px;margin: auto;">
            <legend style="text-align: center;font-size: 18px;">Sửa thông tinh thành viên</legend>
            <table>
                <tr>
                    <td>Tài khoản:</td>
                    <td><input type="text" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Mật khẩu:</td>
                    <td><input type="password" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Nhập lại Mật khẩu:</td>
                    <td><input type="password" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Họ và tên:</td>
                    <td><input type="text" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Giới tính:</td>
                    <td><input type="text" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Chức vụ:</td>
                    <td><select name="rule">
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                       </select>
                    </td>                                        
                </tr>
                <tr>
                    <td>Số điện thoại:</td>
                    <td><input type="text" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr>
                    <td>Địa chỉ:</td>
                    <td><input type="text" name="user" value="" size="25" /></td>                                        
                </tr>
                <tr><td colspan="2" style="text-align: center;"><input type="submit" name="ok" value="Cập nhật" /></td></tr>
            </table>                        
        </fieldset>
    </form>
</article>