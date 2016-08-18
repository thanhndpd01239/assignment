<?php require("lib/mysql.php"); ?>
<?php require("lib/database.php"); ?>
<?php require("lib/classproducts.php"); ?>
<?php require("lib/pagination_products.php"); ?>
<?php
    $Pagination = new Pagination();
    $User = new User(); 
    $limit = $Pagination->limit; 
    $stat = $Pagination->start();
    $totalRecord = $User->totalRecord(); 
    $totalPages = $Pagination->totalPages($totalRecord); 
    $listUsers = $User->listUsers($stat, $limit); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<?php $stt = 1; ?>
<?php foreach($listUsers as $items){ ?>    
    <article class="productsale">
        <article class="toursale"><span><?php echo $items["saleoff"] ?>% OFF</span></article>
        <aside class="productlist">                        
            <span class="productlistimg"><a href='products_detail.php?MaSP=<?php echo $items["masp"] ?>'><img src="image/sanpham/<?php echo $items["iimages"] ?>" alt=""/></a></span>
            <a style="color: black; text-decoration: none;" href='products_detail.php?MaSP=<?php echo $items["masp"] ?>'><h1><?php echo $items["productname"] ?></h1></a>
            <h3><?php echo $items["thongtinhsp"] ?></h3>
            <p class="price">Giá: <?php echo number_format($items["giaban"]) ?> VNĐ</p>
            <aside class="productbutton">                
                SL:<input type="text" style="width: 30px;" value="1">
                <input title="Đặt mua" class="buy" type="button" value="Thêm vào giỏ hàng" onclick=""><br><br>
                <a style="padding: 5px 35px; border-radius: 5px; text-decoration: none; color:#085;background: rgb(224, 203, 203);" href='products_detail.php?MaSP=<?php echo $items["masp"] ?>'>Chi tiết sản phẩm</a> 
            </aside>
        </aside>
    </article>
<?php } ?>
<article id="pagination">
    <?php echo $Pagination->listPages($totalPages); ?>
</article>