@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/css/danhmucsanpham.css') }}" />
@endpush

@section('content')
<div class="breadcrumb-bar">
    <div class="breadcrumb-text">
        <span id="breadcrumb-home" style="cursor: pointer"
            >Trang chủ</span
        >
        /
        <span id="breadcrumb-category" style="cursor: pointer"
            >Danh mục</span
        >
        / <span>ALL PRODUCTS</span>
    </div>
</div>
<!-- Main container -->
<div class="container">
    <!-- Filter section -->
    <div class="filter-section">
        <h3>SẮP XẾP</h3>
        <ul>
            <li><a href="#">Sản phẩm bán chạy</a></li>
            <li><a href="#">Giá từ thấp đến cao</a></li>
            <li><a href="#">Giá từ cao đến thấp</a></li>
            <li><a href="#">Sản phẩm mới nhất</a></li>
        </ul>
    </div>

    <!-- Product list -->
    <div class="product-list">
        <!-- Product 4 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product4.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product4.3.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>"ÁO DÀI" BOXY LONG-SLEEVE T-SHIRT</h4>
            <div class="price">384,000đ <del>550,000đ</del></div>
        </div>
        <!-- Product 1 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product1.webp"
                    alt="Tất trắng"
                />
                <img
                    class="hover-img"
                    src="assets/images/product1.webp"
                    alt="Tất trắng góc khác"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>[KIDS] SET 03 SS LOGO</h4>
            <div class="price">99,000đ</div>
        </div>

        <!-- Product 2 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/quan.webp"
                    alt="Tất trắng"
                />
                <img
                    class="hover-img"
                    src="assets/images/anh hover quan.webp"
                    alt="Tất trắng góc khác"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SS LOGO CARGO PANTS</h4>
            <div class="price">349,000đ <del>690,000đ</del></div>
        </div>

        <!-- Product 3 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product3.webp"
                />
                <img
                    class="hover-img"
                    src="assets/images/product3.1.webp"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>STAFF BIG BOXY LONG SLEEVE T-SHIRT</h4>
            <div class="price">309,000đ <del>450,000đ</del></div>
        </div>

        <!-- Product 5 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product5.png"
                />
                <img
                    class="hover-img"
                    src="assets/images/product5.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>STAFF BIG BOXY LONG SLEEVE T-SHIRT</h4>
            <div class="price">450,000đ <del>520,000đ</del></div>
        </div>
        <!-- Product 6 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product6.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product6.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>LOGO BOXY CARDIGAN</h4>
            <div class="price">419,000đ <del>750,000đ</del></div>
        </div>
        <!-- Product 7 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product7.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product7.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>A RED BUTTON BAGGY PANTS</h4>
            <div class="price">550,000đ <del>600,000đ</del></div>
        </div>
        <!-- Product 8 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product8.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product8.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>STRIPED BOXY SHIRT</h4>
            <div class="price">580,000đ <del>650,000đ</del></div>
        </div>
        <!-- Product 9 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product9.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product9.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>CORE BASIC BOXY T-SHIRT</h4>
            <div class="price">325,000đ <del>380,000đ</del></div>
        </div>
        <!-- Product 10 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product10.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product10.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>"SỔ ĐỎ" RED ENVELOPE</h4>
            <div class="price">99,000đ</div>
        </div>
        <!-- Product 11 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product11.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product11.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SS SHOPPER TO TE BAG</h4>
            <div class="price">320,000đ</div>
        </div>
        <!-- Product 12 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product12.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product12.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>STICKER SOUSTATE SIGNATURE 1.0</h4>
            <div class="price">89,000đ</div>
        </div>
        <!-- Product 13 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product13.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product13.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>[KIDS] BASIC LOGO SWEATSHORTS</h4>
            <div class="price">179,000đ</div>
        </div>
        <!-- Product 14 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product14.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product14.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SS LOGO NECKLACE</h4>
            <div class="price">180,000đ</div>
        </div>
        <!-- Product 15 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product15.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product15.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>BASIC LOGO SWEATPANTS</h4>
            <div class="price">620,000đ</div>
        </div>
        <!-- Product 15 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product15a.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product15.1a.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>
                [SOUSTATE x HOPEFUL HORIZON] BABY YOU ARE NOT ALONE BIG
                BOXY T-SHIRT
            </h4>
            <div class="price">380,000đ</div>
        </div>
        <!-- Product 16 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product16.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product16.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>BLANK OVERSIZE LONG SLEEVE T-SHIRT</h4>
            <div class="price">350,000đ</div>
        </div>
        <!-- Product 17 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product17.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product17.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SS OXFORD BOXY SHIRT</h4>
            <div class="price">468,000đ<del>580,000đ</del></div>
        </div>
        <!-- Product 18 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product18.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product18.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>[KIDS] BASIC LOGO FULLZIP HOODIE</h4>
            <div class="price">299,000đ<del>420,000đ</del></div>
        </div>

        <!-- Product 19 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product19.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product19.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>THE STAR BOXY HOODIE</h4>
            <div class="price">579,000đ<del>650,000đ</del></div>
        </div>
        <!-- Product 20 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product20.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product20.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>BASIC TYPO BIG BOXY T-SHIRT</h4>
            <div class="price">350,000đ</div>
        </div>
        <!-- Product 21 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product21.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product21.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>BASIC TYPO BOXY FULLZIP HOODIE</h4>
            <div class="price">680,000đ</div>
        </div>
        <!-- Product 22 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product22.jpg"
                />
                <img
                    class="hover-img"
                    src=assets/images/product22.1.png"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>[KIDS] BASIC TYPO OVERSIZED T-SHIRT</h4>
            <div class="price">169,000đ<del>250,000đ</del></div>
        </div>
        <!-- Product 23 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product23.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product23.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SS NO.2 BIG BOXY SHIRT</h4>
            <div class="price">419,000đ<del>450,000đ</del></div>
        </div>
        <!-- Product 23 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product23a.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product23a.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SS LOGO BAGGY PANTS</h4>
            <div class="price">599,000đ</div>
        </div>
        <!-- Product 24 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product24.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product24.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>BLANK BIG BOXY T-SHIRT</h4>
            <div class="price">300,000đ</div>
        </div>
        <!-- Product 25 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product25.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product25.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>BLANK OVERSIZE T-SHIRT</h4>
            <div class="price">300,000đ</div>
        </div>
        <!-- Product 26 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product26.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product26.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>WORD FLEX BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>350,000đ</del></div>
        </div>
        <!-- Product 27 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product27.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product27.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SS LOGO NO.2 BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>350,000đ</del></div>
        </div>
        <!-- Product 28 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product28.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product28.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>BIG LOGO BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>350,000đ</del></div>
        </div>
        <!-- Product 29 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product29.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product29.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>CARABINERS BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>400,000đ</del></div>
        </div>
        <!-- Product 29 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product29a.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product29a.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>GOAT BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>390,000đ</del></div>
        </div>
        <!-- Product 30 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product30.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product30.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>MESH JERSEY BIG BOXY T-SHIRT</h4>
            <div class="price">259,000đ<del>420,000đ</del></div>
        </div>
        <!-- Product 31 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product31.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product31.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>KEEP THE FIRE BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>400,000đ</del></div>
        </div>
        <!-- Product 32 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product32.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product32.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>RULING THE SOUL'S FLAME BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>400,000đ</del></div>
        </div>
        <!-- Product 33 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product33.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product32.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>SAFETY PINS BIG BOXY T-SHIRT</h4>
            <div class="price">279,000đ<del>390,000đ</del></div>
        </div>
        <!-- Product 34 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="assets/images/product34.jpg"
                />
                <img
                    class="hover-img"
                    src="assets/images/product34.1.jpg"
                />
                <div class="quick-view">Quick View</div>
            </div>
            <h4>THE STAR BIG BOXY T-SHIRT</h4>
            <div class="price">309,000đ<del>390,000đ</del></div>
        </div>
    </div>
</div>
<!-- Pagination -->
<div class="pagination">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <span class="arrow">→</span>
</div>
@endsection