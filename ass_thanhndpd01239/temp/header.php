<?php session_start(); ?>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<header>
    <article id="topheader">
        <h1>ĐƯỜNG DÂY NÓNG: 19002608</h1>
        <article id="logandres">        
            
        </article>
    </article>
    <a href="index.php"><img src="image/banner.jpg" alt=""/></a>
    <nav>
        <ul>
            <li><a href="index.php"><i class="fa fa-home" style="font-size:18px"></i></a></li>
            <li><a href="shirt.php">ÁO</a></li>
            <li><a href="trousers.php">QUẦN TÂY</a></li>
            <li><a href="shoes.php">GIÀY DÉP</a></li>
            <li><a href="fittings.php">PHỤ KIỆN</a></li>
            <li style="border-right:none"><a href="contact.php">LIÊN HỆ</a></li>
            <li style="float: right">
                <form id="searchbox" method="get" action="/search" autocomplete="off">
                    <input name="q" type="text" size="15" placeholder="search..." />
                    <input id="button-submit" type="submit" value="" />
                </form>
            </li>
        </ul>
    </nav>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
            $(function() {
                    var nav = $('nav');
                    $(window).scroll(function() {
                            if ($(this).scrollTop() > 253) {
                            nav.addClass('f-nav');
                            } else {
                            nav.removeClass('f-nav');
                    }
                    });
            });
        </script>
</header>