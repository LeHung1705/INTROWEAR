<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>


    <meta charset="UTF-8" />


        <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@400;600&display=swap" rel="stylesheet">


     <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
     
    />


   
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
              <a href="{{route('home.index')}}">
                <img src="{{ asset('/assets/images/logo.png')}} " alt="INTROWEAR Logo" class="logo-img">
                <span class="logo-text"></span>
                </a>
            </div>

          @guest
            <div class="header-actions">
                <div class="icons">
                    <a href="{{route('login')}}" >
                    <i class="fas fa-user user-icon"></i>
                </a>
                    <div class="cart-wrapper">
                        <a href="{{route('cart.index')}}">
                        <i class="fas fa-shopping-cart cart-icon">
                          {{-- @if(Cart::instance('cart')->content()->count() > 0)
                          <sub>({{Cart::instance('cart')->content()->count()}})</sub>
                          @endif --}}
                        </i>
                    </a>
                        <span class="cart-count"></span>
                    </div>
                </div>
            </div>

          @else 

            <div class="header-actions">
                <div class="icons">
                    <a style = "text-decoration :none; color : black;"href="{{ Auth::user()->utype=='ADM' ? route('admin.index') : route('user.index')}}">
                    <span class="pr-6px">{{Auth::user()->name}}</span>
                    <i class="fas fa-user user-icon"></i>
                </a>
                        <span class="cart-count"></span>
                    </div>
                </div>
            </div>
          @endguest
    </div>



    <!-- NAVIGATION -->
    <div class="container">
        <div class="main">
            <nav class="sidebar">
                <a href="{{ url('/admin/dashboard') }}" class="nav-button" style="text-decoration: none">DASHBOARD</a>
                <a href="{{route('admin.products')}}" class="nav-button" style="text-decoration: none">MANAGE PRODUCT</a>
                <a href="{{ url('/admin/order') }}" class="nav-button" style="text-decoration: none">ORDERS</a>
                <a href="{{ route('admin.product-add') }}" class="nav-button" style="text-decoration: none">ADD PRODUCT</a>
                <a href="{{ route('admin.coupon') }}" class="nav-button" style="text-decoration: none">COUPON</a>
                <button class="nav-button" style="font-size: 12px; padding : 20px;" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                LOGOUT
                </button>
                <form method="POST" action="{{route('logout')}}" id="logout-form" style="display: none;">
                    @csrf
                </form>
            </nav>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>



    <!-- FOOTER -->
    <footer class="footer">
      <!-- Top section of footer -->
      <div class="footer__top">
        <div class="footer__container-wide">
          <div class="footer__row">
            <!-- Certificate -->
            <div class="footer__certificate footer__col">
              <a href="#" target="_blank">
                <img
                  src="//theme.hstatic.net/200000677367/1001276449/14/dathongbao.png?v=2486"
                  alt="Bộ công thương"
                />
              </a>
            </div>


            <!-- Contact information -->
            <div class="footer__contact footer__col">
              <div class="contact-list">
                <p class="contact-item">
                  <i class="fas fa-map-marker-alt"></i>
                  <span
                    ><strong>Địa chỉ:</strong><br />
                    METUB TOWER, số 35/2 Nguyễn Văn Hưởng, Phường Thảo Điền, TP.
                    Thủ Đức, TP. Hồ Chí Minh.</span
                  >
                </p>


                <p class="contact-item">
                  <i class="fas fa-building"></i>
                  <span
                    ><strong>Công ty:</strong><br />
                    CÔNG TY CỔ PHẦN VIETNAM NEW LIFESTYLE INCUBATION</span
                  >
                </p>


                <p class="contact-item">
                  <i class="fas fa-file-alt"></i>
                  <span><strong>MST: </strong> 0316416910</span>
                </p>
              </div>
            </div>


            <!-- Phone -->
            <div class="footer__phone footer__col">
              <p class="contact-item">
                <i class="fas fa-phone"></i>
                <span
                  ><strong>Điện thoại:</strong><br />
                  0877.534.588 (Zalo)</span
                >
              </p>
            </div>


            <!-- Email -->
            <div class="footer__email footer__col">
              <p class="contact-item">
                <i class="far fa-envelope"></i>
                <span><strong>Email:</strong> contact@introwear.com</span>
              </p>
            </div>


            <!-- Social media links -->
            <div class="footer__social footer__col">
              <ul class="social-list">
                <li class="social-item">
                  <a href="#" target="_blank" aria-label="Facebook"
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                </li>
                <li class="social-item">
                  <a href="#" target="_blank" aria-label="Tiktok"
                    ><i class="fab fa-tiktok"></i
                  ></a>
                </li>
                <li class="social-item">
                  <a href="#" target="_blank" aria-label="YouTube"
                    ><i class="fab fa-youtube"></i
                  ></a>
                </li>
                <li class="social-item">
                  <a href="#" target="_blank" aria-label="Instagram"
                    ><i class="fab fa-instagram"></i
                  ></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


      <!-- Bottom section of footer (copyright) -->
      <div class="footer__bottom">
        <!-- Policy links -->
        <div class="footer__policy">
          <ul class="policy-list">
            <li class="policy-item"><a href="/Website/aboutus.html">Giới thiệu</a></li>
            <li class="policy-item"><a href="#">Điều khoản dịch vụ</a></li>
            <li class="policy-item"><a href="#">Phương thức thanh toán</a></li>
            <li class="policy-item">
              <a href="#">Chính sách vận chuyển & đổi trả</a>
            </li>
            <li class="policy-item"><a href="#">Liên hệ</a></li>
            <li class="policy-item">
              <a href="#">Chính sách thu thập và xử lý dữ liệu cá nhân</a>
            </li>
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


<script src="{{ asset('assets/js/main.js')}}"></script>
     @stack("scripts")
  </body>
 
</html>





