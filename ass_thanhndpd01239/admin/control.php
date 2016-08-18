<meta charset="utf-8">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<link href="../css/admin.css" rel="stylesheet" type="text/css"/>
<article id="admleft">
    <aside id="admlogo">
        <h1><strong style="color: green">Đ.Thành</strong> Fashions </h1>
        <h3>
            <?php 
                session_start();
                if(isset($_SESSION['user'])){
                echo "Chào ".$_SESSION['user'];}
            ?>
        </h3>
        <aside id="admnav"><a href="../index.php">Quay lại cửa hàng</a> | <a href="../logout.php" style="color: red;">Đăng xuất</a></aside>
    </aside>
</article>
<article id="admright">
    <img src="../image/content.jpg" alt="" width="100%" height="200px"/>
</article>
<article id="centerbottom">
    <article id="controlll">
        <div class="col-xs-3"> <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tabs-left">
                <li class="active"><a class="aa" href="#adm" data-toggle="tab">Quản lý thành viên</a></li>
                <li><a class="aa" href="#nhanvien" data-toggle="tab">Quản lý nhân viên</a></li>
                <li><a class="aa" href="#cus" data-toggle="tab">Quản lý khách hàng</a></li>
                <li><a class="aa" href="#prod" data-toggle="tab">Quản lý Sản phẩm</a></li>
                <li><a class="aa" href="#bill" data-toggle="tab">Quản lý đơn hàng</a></li>
                <li><a class="aa" href="#comment" data-toggle="tab">Quản lý tin nhắn</a></li>
            </ul>
        </div>
        <div class="col-xs-9">
            <!-- Tab panes -->
            <div class="tab-content" >
                <div class="tab-pane active" id="adm"><?php include("edituser.php")  ;?></div>
                <div class="tab-pane" id="nhanvien">Nhân viên</div>
                <div class="tab-pane" id="cus">Messages Tab.</div>
                <div class="tab-pane" id="prod"><?php include "addsp.php"; ?></div>
                <div class="tab-pane" id="bill">Settsssssings Tab.</div>
                <div class="tab-pane" id="comment">Sádsdsddwwdwdwd</div>
            </div>
        </div> 
    </article>
</article>