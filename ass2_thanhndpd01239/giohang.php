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
                    <form method="post" action="ttgiaohang.php?matk=<?php  echo "'".$_SESSION['MAKH']."'";?>">
                        <h1 style="text-align: center; font-size: 20px;">GIỎ HÀNG</h1>
                        <table width="100%"  cellpadding="6" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="border-radius: 5px 0 0 0;">Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá</th>
                                    <th>Tổng</th>
                                    <th style="border-radius: 0 5px 0 0;">Xóa sản phẩm</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
                                $makhs = $_SESSION['MAKH'];
                                if(isset($_SESSION["cart_products"])) 
                                {
                                    $total = 0; 
                                    $b = 0;
                                    foreach ($_SESSION["cart_products"] as $cart_itm){
                                    $product_name = $cart_itm["product_name"];
                                    $product_qty = $cart_itm["product_qty"];
                                    $product_price = $cart_itm["product_price"];
                                    $product_code = $cart_itm["product_code"];
                                    $subtotal = ($product_price * $product_qty); 

                                    $bg_color = ($b++%2==1) ? 'odd' : 'even';
                                    echo '<tr class="'.$bg_color.'">';
                                    echo '<td>'.$product_code.'</td>';
                                    echo '<td>'.$product_name.'</td>';
                                    echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';                                    
                                    echo '<td>'.number_format($product_price).' VNĐ</td>';
                                    echo '<td>'.number_format($subtotal).' VNĐ</td>';
                                    echo '<td><button name="remove_code[]" value="'.$product_code.'">Xóa</button></td>';
                                    echo '</tr>';
                                    $total = ($total + $subtotal); 
                                    }
                                $grand_total = $total;
                                }
                            ?>
                        <thead>
                            <tr>
                                <th style="border-radius: 0 0 0 5px;"></th>
                                <th></th>
                                <th></th>
                                <th style="text-align: right;">Tổng thanh toán: </th>
                                <th><?php echo number_format($grand_total);?> VNĐ</th>
                                <th style="border-radius: 0 0 5px 0;"></th>
                            </tr>
                        </thead>
                        <tr>
                            <td colspan="6">
                                <input type="submit" value="Tiếp tục" name="themsp" class="button" >
                                <a href="index.php" class="button">Mua thêm sản phẩm</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="hidden" name="return_url" value="<?php 
                    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                    echo $current_url; ?>" />
                    </form>
                    </div>                     
                 </article>
                <?php include("temp/footer.php")  ;?> 
            </section>
        </main>
    </body>
</html>