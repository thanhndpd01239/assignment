<?php include_once("lib/mysql.php"); ?> 
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
                    <form method="post" action="cart/cart_update.php">
                        <h1 style="text-align: center; font-size: 20px;">HÓA ĐƠN BÁN HÀNG</h1>
                        <p style="padding:0 15%;">Hóa đơn số: <b style="color:red;">000123</b></p>                        
                        <p style="text-align: center;">
                            <?php $timezone = +7;
                                echo gmdate("H:i:s | d-m-Y ", time() + 3600*($timezone+date("I"))) ;
                            ?>
                        </p>
                        <article id="tthoadon">
                            <aside id="ttdv">
                                <p>Đơn vị bán hàng: <b>Công ty Hồng Quang fashion.</b> </p>
                                <p>Điện thoại: <b>0969922367</b></p>
                                <p>Địa chỉ: <b>Thanh Khê - Thành Phố Đà Nẵng.</b></p>
                                <p>Số tài khoản: <b>021192002023</b></p>
                            </aside>
                            <aside id="ttkh">
                                <p>Họ tên người mua hàng: <b></b></p>
                                <p>Điện thoại: <b></b></p>
                                <p>Địa chỉ: <b></b></p>
                                <p>Số tài khoản: <b></b></p>
                            </aside>                            
                        </article>
                        <table width="100%"  cellpadding="6" cellspacing="0" style="border-top: brown dashed 1px;">                             
                            <tr>
                                <td colspan="5" style="float:left;width: 100%;">
                                    <aside style="width: 30%;margin: auto;">
                                        <a href="#" class="button">Xác nhận mua hàng</a>
                                        <a href="ttgiaohang.php" class="button">Quay lại</a> 
                                    </aside>
                                </td>
                            </tr>
                        </table>
                    </form>
                    </div>                     
                 </article>
                <?php include("temp/footer.php")  ;?> 
            </section>
        </main>
    </body>
</html>
