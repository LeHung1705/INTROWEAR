@extends('layouts.app')
@section('content')
<main>
    <!-- Header Banner -->
    <div class="banner">
        <div class="banner-image">
          <img
            src="{{ asset('assets/images/banner_trangchu.png')}}"
            alt="Matching Collection"
          />
        </div>
      </div>

    <!-- New In Section -->
    <section class="new-in">
      <h2 class="section-title">NEW IN</h2>
      <div class="product-row">
        <div class="product">
          <img src="{{ asset('assets/images/ao_dai_xanh.png')}}" alt="Áo dài" />
          <p>“ÁO DÀI” BOXY LONG-SLEEVE T-SHIRT</p>
          <p class="price">
            <span class="new">384,000₫</span> <span class="old">480,000₫</span>
          </p>
        </div>
        <div class="product">
          <img src="{{ asset('assets/images/cardian_do.png')}}" alt="Cardigan" />
          <p>LOGO BOXY CARDIGAN</p>
          <p class="price">
            <span class="new">589,000₫</span> <span class="old">740,000₫</span>
          </p>
        </div>
        <div class="product">
          <img
            src="{{ asset('assets/images/cardian_hong.png')}}"
            alt="Pink T-shirt"
          />
          <p>BASIC TYPO BOXY LONG-SLEEVE T-SHIRT</p>
          <p class="price">
            <span class="new">450,000₫</span> <span class="old">540,000₫</span>
          </p>
        </div>
        <div class="product">
          <img
            src="{{ asset('assets/images/so_mi_xanh.png')}}"
            alt="Striped Shirt"
          />
          <p>STRIPED BOXY SHIRT</p>
          <p class="price">
            <span class="new">580,000₫</span> <span class="old">620,000₫</span>
          </p>
        </div>
      </div>
    </section>

    <!-- Top Banner Section -->
    <section class="top-banner">
      <div class="left-banner">
        <img
          src="{{ asset('assets/images/anh2.png')}}"
          alt="Main Banner"
          class="main-banner-img"
        />
      </div>
      <div class="right-content">
        <h3>*RED by INTROWEAR</h3>
        <p>
          Pop into'25 with the *RED by INTROWEAR - Radiant Energy of Diversity
          for TET
        </p>
        <a href="#" class="view-more-btn">VIEW MORE</a>
      </div>
    </section>

    <!-- Made Different Section -->
    <div class="made-different-container">
      <h2 class="section-title">MADE DIFFERENT</h2>
      <section class="product-grid">
        <div class="product-box">
          <img src="{{ asset('assets/images/anh3_6.png')}}" alt="Best Sellers" />
        </div>
        <div class="product-box">
          <img src="{{ asset('assets/images/anh3_5.png')}}" alt="Tops" />
        </div>
        <div class="product-box">
          <img src="{{ asset('assets/images/anh3_4.png')}}" alt="New In" />
        </div>
        <div class="product-box">
          <img src="{{ asset('assets/images/anh3_3.png')}}" alt="Bottoms" />
        </div>
        <div class="product-box outerwear">
          <img src="{{ asset('assets/images/anh3_2.png')}}" alt="Outerwear" />
        </div>
        <div class="product-box">
          <img src="{{ asset('assets/images/anh3_1.png')}}" alt="Accessories" />
        </div>
      </section>
    </div>

    <!-- Trending Now Section -->
    <section class="trending-now">
      <h2>TRENDING NOW</h2>
      <div class="trending-products">
        <div class="product-item">
          <img src="{{ asset('assets/images/anh4_1.png')}}" alt="" />
          <p class="product-name">STARGAZING BIG BOXY T SHIRT</p>
          <p class="price">
            <span class="new">330,000₫</span> <span class="old">370,000₫</span>
          </p>
        </div>
        <div class="product-item">
          <img src="{{ asset('assets/images/anh4_2.png')}}" alt="" />
          <p class="product-name">MESH JERSEY BIG BOXY T SHIRT</p>
          <p class="price">
            <span class="new">620,000₫</span> <span class="old">750,000₫</span>
          </p>
        </div>
        <div class="product-item">
          <img src="{{ asset('assets/images/anh4_3.png')}}" alt="" />
          <p class="product-name">WATER – MELON BIG BOXY T SHIRT</p>
          <p class="price">
            <span class="new">350,000₫</span> <span class="old">420,000₫</span>
          </p>
        </div>
        <div class="product-item">
          <img src="{{ asset('assets/images/sweater_xanh.png')}}" alt="" />
          <p class="product-name">STAFF BIG BOXY LONG SLEEVE T SHIRT</p>
          <p class="price">
            <span class="new">350,000₫</span> <span class="old">420,000₫</span>
          </p>
        </div>
      </div>
    </section>

    <!-- Collection Section -->
    <section class="collection">
      <h2>COLLECTION</h2>
      <div class="collection-grid">
        <div class="collection-item">
          <img src="{{ asset('assets/images/anh5_1.png')}}" alt="" />
          <p>*RED by INTROWEAR<br /><a href="#">VIEW MORE</a></p>
        </div>
        <div class="collection-item">
          <img src="{{ asset('assets/images/anh5_2.png')}}" alt="" />
          <p>MATCHING<br /><a href="#">VIEW MORE</a></p>
        </div>
        <div class="collection-item">
          <img src="{{ asset('assets/images/anh5_3.png')}}" alt="" />
          <p>EVERYDAY ARTS<br /><a href="#">VIEW MORE</a></p>
        </div>
        <div class="collection-item">
          <img src="{{ asset('assets/images/anh5_4.png')}}" alt="" />
          <p>HÈ HÈ HÈ<br /><a href="#">VIEW MORE</a></p>
        </div>
      </div>
    </section>

    <!-- Flexin Section -->
    <section class="soustage-flexin">
      <h2>INTROWEAR FLEXIN’</h2>
      <div class="flexin-grid">
        <img src="{{ asset('assets/images/anh6_1.png')}}" alt="" />
        <img src="{{ asset('assets/images/anh6_2.png')}}" alt="" />
        <img src="{{ asset('assets/images/anh6_3.png')}}" alt="" />
        <img src="{{ asset('assets/images/anh6_4.png')}}" alt="" />
      </div>
      <div class="register">
        <p>Đăng ký thành viên IntroWear</p>
        <a href="{{route('register')}}" class="btn-register">ĐĂNG KÝ TÀI KHOẢN</a>
      </div>
    </section>
    </main>
@endsection