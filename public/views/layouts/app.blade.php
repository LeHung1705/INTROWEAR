<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('Website/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    @stack("styles")
</head>
<body>
    <!-- HEADER -->
    <header class="header-main">
        <div class="header-top">
            <div class="hamburger-menu">
                <i class="fas fa-bars"></i>
            </div>
            <div class="logo">
                <a href="{{ asset('Website/trangchu.html') }}">
                    <img src="{{ asset('Website/assets/images/logo.png') }}" alt="INTROWEAR Logo" class="logo-img">
                    <span class="logo-text"></span>
                </a>
            </div>
            <div class="search-bar">
                <i class="fas fa-search search-icon"></i>
                <input type="text" placeholder="Search">
            </div>
            <div class="header-actions">
                <div class="icons">
                    <a href="{{ asset('Website/log-in.html') }}">
                        <i class="fas fa-user user-icon"></i>
                    </a>
                    <div class="cart-wrapper">
                        <a href="{{ asset('Website/giohang.html') }}">
                            <i class="fas fa-shopping-cart cart-icon"></i>
                        </a>
                        <span class="cart-count"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom responsive-nav">
            <nav>
                <ul>
                    <li><a href="{{ asset('Website/trangchu.html') }}" id="homepageLink">HOMEPAGE</a></li>
                    <li class="dropdown"><a href="{{ asset('Website/trangchu.html') }}">SHOP</a></li>
                    <li><a href="{{ asset('Website/aboutus.html') }}" id="aboutUsLink">ABOUT US</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- MAIN CONTENT -->
    @yield("content")
    <div style="height: 50px"></div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer__top">
            <div class="footer__container-wide">
                <div class="footer__row">
                    <div class="footer__certificate footer__col">
                        <a href="#" target="_blank">
                            <img src="{{ asset('Website/assets/images/dathongbao.png') }}" alt="Bộ công thương">
                        </a>
                    </div>

                    <div class="footer__contact footer__col">
                        <div class="contact-list">
                            <p class="contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span>
                                    <strong>Địa chỉ:</strong><br>
                                    METUB TOWER, số 35/2 Nguyễn Văn Hưởng, Phường Thảo Điền, TP. Thủ Đức, TP. Hồ Chí Minh.
                                </span>
                            </p>
                            <p class="contact-item">
                                <i class="fas fa-building"></i>
                                <span>
                                    <strong>Công ty:</strong><br>
                                    CÔNG TY CỔ PHẦN VIETNAM NEW LIFESTYLE INCUBATION
                                </span>
                            </p>
                            <p class="contact-item">
                                <i class="fas fa-file-alt"></i>
                                <span><strong>MST:</strong> 0316416910</span>
                            </p>
                        </div>
                    </div>

                    <div class="footer__phone footer__col">
                        <p class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span><strong>Điện thoại:</strong><br>0877.534.588 (Zalo)</span>
                        </p>
                    </div>

                    <div class="footer__email footer__col">
                        <p class="contact-item">
                            <i class="far fa-envelope"></i>
                            <span><strong>Email:</strong> contact@introwear.com</span>
                        </p>
                    </div>

                    <div class="footer__social footer__col">
                        <ul class="social-list">
                            <li class="social-item"><a href="#" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-item"><a href="#" target="_blank" aria-label="Tiktok"><i class="fab fa-tiktok"></i></a></li>
                            <li class="social-item"><a href="#" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
                            <li class="social-item"><a href="#" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="footer__policy">
                <ul class="policy-list">
                    <li class="policy-item"><a href="{{ asset('Website/aboutus.html') }}">Giới thiệu</a></li>
                    <li class="policy-item"><a href="#">Điều khoản dịch vụ</a></li>
                    <li class="policy-item"><a href="#">Phương thức thanh toán</a></li>
                    <li class="policy-item"><a href="#">Chính sách vận chuyển & đổi trả</a></li>
                    <li class="policy-item"><a href="#">Liên hệ</a></li>
                    <li class="policy-item"><a href="#">Chính sách thu thập và xử lý dữ liệu cá nhân</a></li>
                </ul>
            </div>
            <div class="footer__container">
                <p class="footer__copyright">
                    Copyright © 2025 <a href="#">INTROWEAR</a>. Powered by
                    <a href="#" target="_blank">TEAM INTROWEAR</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('Website/js/main.js') }}"></script>
    @stack("scripts")
</body>
</html>
