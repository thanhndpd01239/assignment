<?php 
    include("lib/config.php");
    $id = $_GET["MaSP"];
    $result = mysql_query("SELECT * FROM sanpham WHERE MaSP = ".$id, $connect);
    $row  = mysql_fetch_array($result);
            
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
        <title>Đ. Thành Fashions</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/products-detail.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    </head>
    <body>
        <main>
            <?php include("temp/header.php")  ;?>
            <section>
                <article class="showhere">
                    
                </article>
                <?php include("temp/left.php")  ;?>
                <article id="right">
                    <article class="detail">
                        <article class="detail-off"><span>10% OFF</span></article>
                        <aside class="detail-item">
                            <img src="image/sanpham/<?php echo $row["iimages"] ?>" alt=""/>
                            <span class="info-item">
                                <h2><?php echo $row["productname"] ?></h2>
                                <i class="fa fa-star" style="color: red;"></i>
                                <i class="fa fa-star" style="color: red;"></i>
                                <i class="fa fa-star" style="color: red;"></i>
                                <i class="fa fa-star" style="color: red;"></i>
                                <i class="fa fa-star" style="color: red;"></i>
                                <p><strong>Made in</strong>: <?php echo $row["madein"] ?> </p>
                                <p><strong>Size</strong>: <?php echo $row["size"] ?></p>
                                <p><strong>Tình trạng</strong>: Còn hàng</p>
                                <h2><strong>Giá</strong>: <strong style="color: red;"><?php echo number_format($row["giaban"]) ?> VNĐ</strong></h2>
                                <p style="color: red;">Sản phẩm đã bao gồm thuế VAT.</p>
                                <button><strong>Thêm vào giỏ hàng <i class="fa fa-shopping-cart" style="font-size: 18px;"></i></strong></button>
                            </span>
                        </aside>
                    </article>
                    <article id="controlll">
                        <div>
                            <ul>
                                <li class="active" style="float:left;"><a class="aaa" href="#adm" data-toggle="tab">Mô tả sản phẩm</a></li>
                                <li><a class="aaa" href="#cus" data-toggle="tab">Đặc điểm sản phẩm</a></li>
                            </ul>
                        </div>
                        <div id="cont">
                            <div class="tab-pane active" id="adm">Mô tả sp</div>
                            <div class="tab-pane" id="cus">Đặc điểm.</div>
                         </div> 
                    </article>
                </article>
                <?php include("temp/footer.php")  ;?> 
            </section>
        </main>
    </body>
</html>
