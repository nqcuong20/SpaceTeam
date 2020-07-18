<!DOCTYPE html>
<html>
    <head>
        <title>SPACE TEAM</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/carousel/owl.theme.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>
        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/elevatezoom-master/jquery.elevatezoom.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/carousel/owl.carousel.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
        <script src="public/js/myscript.js" type="text/javascript"></script>
        <script src="modules/cart/js/app.js" type="text/javascript"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3"></script>
        <SCRIPT LANGUAGE="JavaScript">
            function confirmAction_delete_cart() {
                return confirm("Bạn muốn loại bỏ sản phẩm này khỏi giỏ hàng?")
            }
            function confirmAction_delete_all_cart() {
                return confirm("Bạn muốn loại bỏ tất cả sản phẩm khỏi giỏ hàng?")
            }
            function confirmAction_users() {
                return confirm("Bạn muốn đăng xuất?")
            }
            function confirmAction_detail() {
                return confirm("Sản phẩm này đã hết hàng, bạn vui lòng chọn sản phẩm khác? ")
            }
            function confirmAction_email() {
                return confirm("Bạn vui lòng vào email để xác nhận? ")
            }
        </SCRIPT>
        <script>
            function cart(id) {
                $.get("?mod=cart&act=add", {"id": id}, function (data) {

                });

            }
        </script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp">
                    <div id="head-top" class="clearfix">
                        <div class="wp-inner">
                            <div id="main-menu-wp" class="fl-left">
                                <ul id="main-menu" class="clearfix">
                                    <li class="active">
                                        <a href="?page=home" title="">Trang chủ</a>
                                    </li>
                                    <li>
                                        <a href="?mod=post&act=blog" title="">Blog</a>
                                    </li>
                                    <li>
                                        <a href="?mod=page&act=main" title="">Giới Thiệu</a>
                                    </li>
                                    <li>
                                        <a href="?mod=page&act=contact" title="">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>

                            <?php
                            if (isset($_SESSION['is_login'])) {
                                ?>
                                <div id="user-login" class="dropdown dropdown-extended fl-right">
                                    <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <h3 id="account" class="fl-right">Hello <strong><?php if (is_login()) echo info_user('fullname'); ?></strong></h3>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="?mod=users&act=info_account" title="Thông tin cá nhân">Thông tin cá nhân</a></li>
                                        <!--                                        <li><a href="?mod=users&act=change_password" title="Đổi mật khẩu">Đổi mật khẩu</a></li>-->
                                        <li><a class="logout" onclick="return confirmAction_users()" href="?mod=users&act=logout">Đăng xuất</a></li>
                                    </ul>
                                </div>
                                <?php
                            }else {
                                ?>
                                <div id="action-user" class="fl-right">
                                    <div id="not-signed">
                                        <a href="?mod=users&act=login" title="" id="login">Đăng nhập</a>
                                        <span id="icon">/</span>
                                        <a href="?mod=users&act=register" title="" id="reg">Đăng ký</a>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div id="head-body" class="clearfix">
                        <div class="wp-inner">
                            <a href="?page=home" title="" id="logo" class="fl-left"><img style="width:200px" src="public/images/logo1.png"/></a>
                            <div id="search-wp" class="fl-left">
                                <form method="POST" action="?mod=search&act=search_product">
                                    <input type="text" name="keyword" id="search" placeholder="Nhập từ khóa tìm kiếm tại đây!">
                                    <button type="submit" name="btn_search" id="btn_search">Tìm kiếm</button>
                                </form>
                            </div>
                            <div id="action-wp" class="fl-right">
                                <div id="advisory-wp" class="fl-left">
                                    <span class="title">Tư vấn</span>
                                    <span class="phone">0377 077 630</span>
                                </div>
                                <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                <a href="?mod=cart&act=show" title="giỏ hàng" id="cart-respon-wp" class="fl-right">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                    <?php
                                    if (isset($_SESSION['cart']['buy'])) {
                                        $num_order = count($_SESSION['cart']['buy']);
                                    } else {
                                        $num_order = 0;
                                    }
                                    ?>
                                    <span id="num"><?php echo $num_order; ?></span>
                                </a>
                                <div id="cart-wp" class="fl-right">
                                    <div id="btn-cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                        <?php
                                        if (isset($_SESSION['cart']['buy'])) {
                                            $num_order = count($_SESSION['cart']['buy']);
                                        } else {
                                            $num_order = 0;
                                        }
                                        ?>
                                        <span id="num"><?php echo $num_order; ?></span>
                                    </div>
                                    <div id="dropdown">
                                        <p class="desc">Có <span><?php echo $num_order ?> sản phẩm</span> trong giỏ hàng</p>
                                        <?php
                                        if (isset($_SESSION['cart']['buy'])) {
                                            $list_buy = get_list_by_cart();
                                            ?>
                                            <ul class="list-cart">
                                                <?php
                                                foreach ($list_buy as $buy) {
                                                    ?>
                                                    <li class="clearfix">
                                                        <a href="" title="" class="thumb fl-left">
                                                            <img src="admin/uploads/<?php echo $buy['product_thumb'] ?>" alt="">
                                                        </a>
                                                        <div class="info fl-right">
                                                            <a href="" title="" class="product-name"><?php echo $buy['product_name'] ?></a>
                                                            <p class="price"><?php echo currency_format($buy['price_new']) ?></p>
                                                            <p class="qty">Số lượng: <span><?php echo $buy['qty'] ?></span></p>
                                                        </div>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                            <?php
                                        }
                                        ?>
                                        <div class="total-price clearfix">
                                            <?php
                                            if (isset($_SESSION['cart']['info']['total'])) {
                                                $total = $_SESSION['cart']['info']['total'];
                                            } else {
                                                $total = 0;
                                            }
                                            ?>
                                            <p class="title fl-left">Tổng:</p>
                                            <p class="price fl-right"><?php echo currency_format($total); ?></p>

                                        </div>
                                        <dic class="action-cart clearfix">
                                            <a href="?mod=cart&act=show" title="Giỏ hàng" class="view-cart fl-left">Giỏ hàng</a>
                                            <?php
                                            if (isset($_SESSION['is_login'])) {
                                                ?>
                                                <a href="?mod=check_out&act=checkout" title="Thanh toán" class="checkout fl-right">Thanh toán</a>
                                                <?php
                                            } else {
                                                ?>
                                                <a href="?mod=users&act=login" title="Đăng nhập" class="checkout fl-right">Thanh toán</a>
                                                <?php
                                            }
                                            ?>
                                        </dic>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>