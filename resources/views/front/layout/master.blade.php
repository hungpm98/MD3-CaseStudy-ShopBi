<!doctype html>
<html lang="vi">

<head>
    <title>@yield('title') | LuStore</title>
    <meta name="description"
          content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="front/css/home.css">
    <script type="text/javascript" src="front/js/main.js"></script>
    <link rel="stylesheet" href="front/fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="front/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="front/slick/slick-theme.css" />
    <script type="text/javascript" src="front/slick/slick.min.js"></script>
    <script type="text/javascript"
            src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://dealbook.xyz/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="front/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="front/image/png" sizes="32x32" href="front/favicon_io/favicon-32x32.png">
    <link rel="icon" type="front/image/png" sizes="16x16" href="front/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="front/favicon_io/site.webmanifest">
    <style>img[alt="front/www.000webhost.com"]{display: none;}</style>
</head>

<body>
<!-- code cho nut like share facebook  -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

<!-- header -->
<nav class="navbar navbar-expand-md bg-white navbar-light">
    <div class="container">
        <!-- logo  -->
        <a class="navbar-brand" href="index.blade.php" style="color: #CF111A;"><b>DealBook</b>.xyz</a>

        <!-- navbar-toggler  -->
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <!-- form tìm kiếm  -->
            <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                <div class="input-group" style="width: 520px;">
                    <input type="text" class="form-control" aria-label="Small"
                           placeholder="Nhập sách cần tìm kiếm...">
                    <div class="input-group-append">
                        <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
            <ul class="navbar-nav mb-1 ml-auto">
                <div class="dropdown">
                    <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                        <a href="#" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-user"></i>
                        </a>
                        <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                            khoản</a>
                    </li>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                           data-target="#formdangky">Đăng ký</a>
                        <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                           data-target="#formdangnhap">Đăng nhập</a>
                    </div>
                </div>
                <li class="nav-item giohang">
                    <a href="gio-hang.html" class="btn btn-secondary rounded-circle">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="cart-amount">0</div>
                    </a>
                    <a class="nav-link text-dark giohang text-uppercase" href="gio-hang.html"
                       style="display:inline-block">Giỏ
                        Hàng</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- form dang ky khi click vao button tren header-->
<div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
     aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                    <li class="tab tab-dangnhap text-center">
                        <a class=" text-decoration-none">Đăng nhập</a>
                        <hr>
                    </li>
                    <li class="tab tab-dangky text-center">
                        <a class="text-decoration-none">Đăng ký</a>
                        <hr>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-signup" class="form-signin mt-2">
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required
                               autofocus>
                    </div>
                    <div class="form-label-group">
                        <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone"
                               required>
                    </div>
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                               required>
                    </div>
                    <div class="form-label-group">
                        <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password"
                               required>
                    </div>
                    <div class="form-label-group mb-4">
                        <input type="password" class="form-control" name="confirm_password"
                               placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit"
                            style="background: #F5A623">Đăng ký</button>
                    <hr class="mt-3 mb-2">
                    <div class="custom-control custom-checkbox">
                        <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với DealBook về</p>
                        <a href="#" class="text-decoration-none text-center" style="color: #F5A623">Điều khoản dịch
                            vụ & Chính sách bảo mật</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- form dang nhap khi click vao button tren header-->
<div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
     aria-labelledby="dangnhap_tieude" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                    <li class="tab tab-dangnhap text-center">
                        <a class=" text-decoration-none">Đăng nhập</a>
                        <hr>
                    </li>
                    <li class="tab tab-dangky text-center">
                        <a class="text-decoration-none">Đăng ký</a>
                        <hr>
                    </li>
                </ul>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-signin" class="form-signin mt-2">
                    <div class="form-label-group">
                        <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                               required autofocus>
                    </div>

                    <div class="form-label-group">
                        <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                    </div>

                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Nhớ mật khẩu</label>
                        <a href="#" class="float-right text-decoration-none" style="color: #F5A623">Quên mật
                            khẩu</a>
                    </div>

                    <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit"
                            style="background: #F5A623">Đăng nhập</button>
                    <hr class="my-4">
                    <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i
                            class="fab fa-google mr-2"></i> Đăng nhập bằng Google</button>
                    <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i
                            class="fab fa-facebook-f mr-2"></i> Đăng nhập bằng Facebook</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
<section class="duoinavbar">
    <div class="container text-white">
        <div class="row justify">
            <div class="col-md-3">
                <div class="categoryheader">
                    <div class="noidungheader text-white">
                        <i class="fa fa-bars"></i>
                        <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="benphai float-right">
                    <div class="hotline">
                        <i class="fa fa-phone"></i>
                        <span>Hotline:<b>1900 1999</b> </span>
                    </div>
                    <i class="fas fa-comments-dollar"></i>
                    <a href="#">Hỗ trợ trực tuyến </a>
                </div>
            </div>
        </div>
    </div>
</section>



{{--Body Here--}}
@yield('body')




<!-- footer  -->
<footer>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3 col-xs-6">
                <div class="gioithieu">
                    <h3 class="header text-uppercase font-weight-bold">Về DealBook</h3>
                    <a href="#">Giới thiệu về DealBook</a>
                    <a href="#">Tuyển dụng</a>
                    <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                         data-width="300px" data-layout="button" data-action="like" data-size="small"
                         data-share="true"></div>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="hotrokh">
                    <h3 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h3>
                    <a href="#">Hướng dẫn đặt hàng</a>
                    <a href="#">Phương thức thanh toán</a>
                    <a href="#">Phương thức vận chuyển</a>
                    <a href="#">Chính sách đổi trả</a>
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="lienket">
                    <h3 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h3>
                    <img src="front/images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                </div>
            </div>
            <div class="col-md-3 col-xs-6">
                <div class="ptthanhtoan">
                    <h3 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h3>
                    <img src="front/images/visa-payment.jpg" alt="visa-payment">
                    <img src="front/images/master-card-payment.jpg" alt="master-card-payment">
                    <img src="front/images/jcb-payment.jpg" alt="jcb-payment">
                    <img src="front/images/atm-payment.jpg" alt="atm-payment">
                    <img src="front/images/cod-payment.jpg" alt="cod-payment">
                    <img src="front/images/payoo-payment.jpg" alt="payoo-payment">
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- nut cuon len dau trang -->
<div class="fixed-bottom">
    <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
         style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
</div>

</body>

</html>


