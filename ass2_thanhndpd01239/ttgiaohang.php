<?php
    include_once("lib/mysql.php");
    include ("lib/config.php");
?>
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
        <link href="cart/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <main>
            <?php include("temp/header.php")  ;?>
            <section>                                
                 <article id="rightdangky">
                    <div class="cart-view-table-back">
                        <h1 style="text-align: center; font-size: 20px;">Thông tin đơn hàng</h1>                       
                        <?php
                            if(isset($_POST['dangky'])){       
                                $tkhachhang=$_POST['hovt'];
                                $dthoai=$_POST['birthd'];
                                $dchi=$_POST['thanhToan'];
                                $staikhoan=$_POST['email'];
                                $cmndd=$_POST['sdt'];
                                $mail=$_POST['comment'];
                                if (!$tkhachhang || !$dthoai || !$dchi || !$staikhoan || !$cmndd || !$mail){
                                    echo '<span style="float:left; font-weight: bold; text-align:center; width: 100%; margin: 20px 0;">Vui lòng nhập đầy đủ thông tin.</span>';
                                }
                                $sql6= " insert into khachhang(tenkh, dienthoai, diachi, sotaikhoan, cmnd, email) values ('$tkhachhang','$dthoai','$dchi','$staikhoan','$cmndd','$mail')";
                                
                                $conn->query($sql6);
                                $conn->close();
                                unset($_SESSION["cart_products"]);
                                header('Location:ketthuc.php');
                            }
                        ?>
                        <?php 
                            $id = $_GET["matk"];
                            $result = mysql_query("SELECT * FROM taikhoan WHERE matk = ".$id, $connect);
                            $row  = mysql_fetch_array($result); 
                            $date= new DateTime();
                            $today=$date->format('y-m-d');
                            
                           
                        ?>
                        
                        <form action="ttgiaohang.php" method="post" name="myForm" onsubmit="return validateForm()" > 
                        <article>
                            <h1>Thông tin khách hàng</h1>                            
                            <table style=" margin:0 0 20px 50px;">
                                <tr>
                                    <td>Hóa đơn số:</td>
                                    <td style="color: red;"><b>123123</b></td>
                                </tr>
                                <tr>
                                    <td>Tên người mua:</td>
                                    <td><?php echo $row["fullname"] ?></td>
                                </tr>
                                <tr>
                                    <td>Điện thoại:</td>
                                    <td><?php echo $row["phonenumber"] ?></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td><?php echo $row["address"] ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><?php echo $row["email"] ?></td>
                                </tr>
                                <tr>
                                    <td> Ngày Đặt Hàng :</td>
                                    <td><input type="date" name="ndh" disabled value="<?php echo $row["ngayban"] ?>"/><br /></td>
                                </tr>                                                
                                <tr>
                                    <td>Ngày Giao Hàng :</td>
                                    <td><input type="date" name="ngh"  value="" /><br />
                                    </td>
                                </tr>   
                            </table>                            
                        </article>
                        <article class="ttgiohang">
                            <h1 style="margin:20px 0;float:left;">Thông tin sản phẩm</h1>
                            <table width="100%"  cellpadding="6" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="border-radius: 5px 0 0 0;">Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Giá</th>
                                        <th>Tổng</th>
                                        <th style="border-radius: 0 5px 0 0;"></th> 
                                       <?php  
                                        
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(isset($_SESSION["cart_products"])) 
                                        {
                                            $total = 0; 
                                            $b = 0; 
                                            $soluong = 0;
                                            foreach ($_SESSION["cart_products"] as $cart_itm){
                                            $product_name = $cart_itm["product_name"];
                                            $product_qty = $cart_itm["product_qty"];
                                            $product_price = $cart_itm["product_price"];
                                            $product_code = $cart_itm["product_code"];
                                            $subtotal = ($product_price * $product_qty); 

                                            $bg_color = ($b++%2==1) ? 'odd' : 'even'; 
                                            echo '<tr class="'.$bg_color.'">';
                                            echo '<td><input name="masp" disabled="" size="1" value="'.$product_code.'"></td>';
                                            echo '<td><input name="tensp" disabled="" value="'.$product_name.'"></td>';
                                            echo '<td><input type="text" disabled="" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';                                    
                                            echo '<td><input name="" disabled="" value="'.number_format($product_price).'"> VNĐ</td>';
                                            echo '<td><input name="" disabled="" value="'.number_format($subtotal).'"> VNĐ</td>';
                                            echo '</tr>';
                                            $total = ($total + $subtotal);   
                                            $soluong = ($soluong + $product_qty);
                                            }                                         
                                        }
                                    ?>
                                <thead>
                                    <tr>
                                        <th style="border-radius: 0 0 0 5px;text-align: right;"></th>
                                        <th style="text-align: right;">Tổng số lượng: </th>
                                        <th><input style="font-weight: bold" name="tongthanhtoan" disabled="" size="2" value="<?php echo $soluong;?> "></th>
                                        <th style="text-align: right;">Tổng thanh toán: </th>
                                        <th><input style="font-weight: bold" name="tongthanhtoan" disabled="" value="<?php echo number_format($total);?> "> VNĐ</th>
                                        <th style="border-radius: 0 0 5px 0;"></th>
                                    </tr>
                                </thead>
                                <tr>
                                    <td colspan="6">
                                        <button name="dangky" type="submit">Xác nhận mua hàng</button>                           
                                        <a href="giohang.php" class="button">Quay lại</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </article>
                    </form>
                    </div>                     
                 </article>
                <?php include("temp/footer.php")  ;?> 
            </section>
        </main>
    </body>
</html>
