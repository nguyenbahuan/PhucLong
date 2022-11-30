<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <title>Phúc Long</title>
</head>

<body>
    <header>
        <div class="header_1">
            <div class="h_top">
                <div id="bars"><i class="fa fa-bars fa-2x" style="color: white;"></i></div>
                <div class="h_delivered">
                    <img src="{{ asset('img/delivery.png') }}" alt="">
                </div>
                <div class="h_delivered_1">
                    <img src="{{ asset('img/delivery.png') }}" alt="">
                </div>

                <div class="h_logo">
                    <img id="img_logo" src="{{ asset('img/download.png') }}" alt="">
                </div>
                <div class="h_right">
                    <ul>
                        <li class="login"><a href="./login.html">Đăng nhập</a></li>
                        <li class="language"><a href="">VN</a></li>
                        <li class="language-last"><a href="">EN</a></li>
                        <li class="h_cart">
                            <a href="">Giỏ hàng
                                <i class="fa fa-shopping-cart"></i>
                                <span class="h_cart_mumber"> 0 </span>
                            </a>
                            <div class="sub-cart">
                                <div class="cart-content">
                                    <div class="info-cart">
                                        <p>Giỏ hàng của bạn</p>
                                        <a href="#" class="btn-buy-products">Xem chi tiết</a>
                                    </div>
                                    <div class="products" id="root1">
                                        <!-- <ul >
                                            <li>
                                                <div id="box-product">
                                                    <img src='' alt="" style="width:80px;height: 80px;" class="box-product-img">
                                                    <div class="product-info">
                                                        <div class="product-info-name">tên sản phẩm</div>
                                                        <div class="product-info-size">size</div>
                                                        <div class="product-info-index">só lượng</div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> -->
                                    </div>
                                    <div class="cart-total">
                                        <label for="">Tổng tiền</label>
                                        <span>0 đ</span>
                                    </div>
                                    <div class="cart-pay"><a href="#">Thanh toán</a></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="h_menu">
                <ul>
                    <li><a href="{{ url('/') }}">TRANG CHỦ</a></li>
                    <li class="menu">
                        <a href="{{ url('/coffe') }}">CÀ PHÊ</a>
                        <div class="menu-sub">
                            <ul class="menu-sub-content">
                                <li class="menu-sub-item">Hành trình tách cà phê đậm vị</li>
                                <li class="menu-sub-item">Hạt cà phê Phúc Long</li>
                                <li class="menu-sub-item">Nghệ thuật pha cà phê</li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu"><a href="./tea.html">TRÀ</a>
                        <div class="menu-sub">
                            <ul class="menu-sub-content">
                                <li class="menu-sub-item">Hành trình tách trà đậm vị</li>
                                <li class="menu-sub-item">Lá trà Phúc Long</li>
                                <li class="menu-sub-item">Cold Brew Tea - Trà Ủ Lạnh - Phong Cách Trà Mới</li>
                                <li class="menu-sub-item">Nghệ thuật pha chế</li>

                            </ul>
                        </div>
                    </li>
                    <li class="menu"><a href="{{ url("/product?category=drink") }}">THỨC UỐNG</a>
                        <div class="menu-sub">
                            <ul class="menu-sub-content">
                                <li class="menu-sub-item">Thức uống</li>
                                <li class="menu-sub-item">Bánh tráng miệng</li>
                                <li class="menu-sub-item">Đồ ăn mặn</li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="./about_us.html">VỀ CHÚNG TÔI</a></li>
                    <li class="icon_user" style="display: none;"><a href="./login.html"><i class="fa fa-user"></i></a>
                    </li>
                    <li class="menu"><i class="fa fa-search"></i>
                        <div class="menu-sub" id="search-bar">
                            <ul class="menu-sub-content">
                                <li class="menu-sub-item">Sản phẩm cà phê</li>
                                <li class="menu-sub-item">Sản phẩm trà</li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li><i class="fa fa-search"></i></li> -->
                </ul>
            </div>
        </div>
        
        <div class="slider">
            <div class="item" style="background: url({{ asset('img/slide1.png') }})"></div>
            <div class="item" style="background: url({{ asset('img/slide2.png') }})"></div>
            <div class="item" style="background: url({{ asset('img/slide3.png') }})"></div>
            <div class="button-slider">
                <button class="prev" onclick="nextImg(-1)"><i class="fa-solid fa-chevron-left pre"></i></button>
                <button class="next" onclick="nextImg(1)"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="dots">
                <div class="dot" onclick="currentSlide(1)"></div>
                <div class="dot" onclick="currentSlide(2)"></div>
                <div class="dot" onclick="currentSlide(3)"></div>
            </div>
    
        </div>

    </header>
    <main>
        @yield('main')
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <b>Trụ sở chính</b>: Công ty Cổ Phần Phúc Long Heritage - ĐKKD: 0316 871719<br>
                    do sở KHĐT TPHCM cấp lần đầu ngày 21/05/2021<br>
                    <b>Nhà máy</b>: D_8D_CN Đường XE 1, Khu Công Nghiệp Mỹ Phước III, phường Mỹ Phước, thị xã Bến Cát,
                    tỉnh
                    Bình Dương, Việt Nam<br>
                    <b>Địa chỉ</b>: 42/24 - 42/26 Đường 643 Tạ Quang Bửu, phường 4, quận 8, Hồ Chí Minh<br>
                    <b>Điện thoại</b>: 028 6263 0377 - 6263 0378 <br>
                    <b>Fax</b>: (028) 6263 0379 <br>
                    <b class="w37">Email</b><span class="w4">:</span><span class="w1">
                        Sales@phuclong.com.vn</span><br>
                    <b class="w37"> </b><span class="w4"></span><span class="w1"> Info@phuclong.com.vn</span>
                </div>
                <div class="col-md-4 col-xs-12 f_follow" id="footer_form">
                    <h6>Đăng kí nhận khuyến mãi</h6>
                    <div class="form-inline">
                        <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                            placeholder="Nhập địa chỉ email" style="margin-right: 5px;">
                        <button type="button" class="btn btn-outline-success">GỬI</button>
                    </div>
                    </form>
                </div>
                <div class="col-md-2 col-xs-12 f-language">
                    <div class="language">
                        <a class="language-active" style="color: #0C713D; text-decoration: none;">VN</a> |
                        <a class="language-last" style="color:#010101; text-decoration: none;">EN</a>
                    </div>
                    <a>
                        <img src="{{ asset('img/dathongbao.png') }}" alt="dathongbao" id="img-noti">
                    </a>

                    <ul class="f-social">
                        <li><a class="btn-icon" href="http://www.facebook.com/phuclongcoffeeandtea"><i
                                    class="fa-brands fa-facebook"></i></a></li>
                        <li><a class="btn-icon" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="btn-icon" href="https://www.instagram.com/phuclongcoffeeandtea/"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                        <li><a class="btn-icon" href="https://www.youtube.com/channel/UCq6WR0wWNUuz53c4zeWSa8g"><i
                                    class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright text-center p-3 text-lg-start bg-dark">
            <p class="text-white">© 2022 Copyright: <a class="text-white" href="https://phuclong.com.vn/">Phuc
                    Long</a></p>

        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
