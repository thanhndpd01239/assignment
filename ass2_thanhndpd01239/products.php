<?php 
    require("lib/mysql.php"); 
    require("lib/database.php"); 
    require("lib/classproducts.php"); 
    require("lib/pagination_products.php");
?>
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
<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$results = $conn->query("SELECT masp, saleoff, iimages, productname, giaban, thongtinhsp FROM sanpham ORDER BY masp ASC");
if($results){ 
$products_item = '';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
 ?>
<form method="post" action="cart/cart_update.php">
    <article class="productsale">
        <article class="toursale"><span><?php echo $obj->saleoff?>% OFF</span></article>
        <aside class="productlist">                        
            <span class="productlistimg"><a href='products_detail.php?MaSP=<?php echo$obj->masp?>'><img src="image/sanpham/<?php echo$obj->iimages?>" alt=""/></a></span>
            <a style="color: black; text-decoration: none;" href='products_detail.php?MaSP=$obj->masp'><h1><?php echo$obj->productname?></h1></a>
            <h3><?php echo$obj->thongtinhsp?></h3>
            <p class="price">Giá: <?php echo number_format($obj->giaban)?> VNĐ</p>
            <aside class="productbutton">                
                SL:<input type="text" size="1" maxlength="2" name="product_qty" value="1" />
                <input title="Đặt mua" type="submit" value="Thêm vào giỏ hàng" onclick=""><br><br>
                <input type="hidden" name="product_code" value="<?php echo$obj->masp?>" />
                <input type="hidden" name="type" value="add" />
                <input type="hidden" name="return_url" value="<?php echo $current_url?>" />
                <a style="padding: 5px 35px; border-radius: 5px; text-decoration: none; color:#085;background: rgb(224, 203, 203);" href='products_detail.php?MaSP=<?php echo$obj->masp?>'>Chi tiết sản phẩm</a> 
            </aside>
        </aside>
    </article>
</form> 
<?php
}
$products_item .= '';
echo $products_item;
};
?> 
<article id="pagination">
    <?php echo $Pagination->listPages($totalPages); ?>
</article>