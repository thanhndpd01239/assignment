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
                        <h1 style="color: blue;text-align: center">Đặt hàng thành công</h1>
                        <p style="color: blue;text-align: center">Đơn hàng của bạn đã được thanh toán thành công, vui lòng kiểm tra mail để biết thông tin ship hàng</p>
                        <aside style="width: 100%;text-align: center;"><strong><a href="index.php" style="color: blue;text-decoration: none">Trở về trang chủ</a></strong></aside>
                    </div>                     
                 </article>
                <?php include("temp/footer.php")  ;?> 
            </section>
        </main>
    </body>
</html>
