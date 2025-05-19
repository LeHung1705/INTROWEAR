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
        @foreach ($products as $product)
        <!-- Product 1 -->
        <div class="product-item">
            <div class="image-container">
                <img
                    class="default-img"
                    src="{{ asset('uploads/products')}}/{{$product->image}}"
                />
                <div class="quick-view"><a href="#">Quick View</a></div>
                @if(Cart::instance('cart')->content()->where('id', $product->id)->count() > 0)
                <a href="{{ route('cart.index') }}" class="add-to-cart">Go to cart</a>
                @else
                <form name="addtocart-form" method="post" action="{{route('cart.add')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$product->id}}">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="name" value="{{$product->product_name}}">
                    <input type="hidden" name="price" value="{{$product->price_sale == '' ? $product->price : $product->price_sale}}">
                    <button type="submit" class="add-to-cart">Add to cart</button>
                </form>
                @endif
            </div>
            <h4>{{$product->product_name}}</h4>
            <div class="price">{{$product->price_sale}} <del>{{$product->price}}</del></div>
        </div>
        @endforeach
    </div>
</div>
<!-- Pagination -->
@if ($products->hasPages())
    <div class="pagination">
        {{-- Page Links --}}
        @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
            @if ($page == $products->currentPage())
                <a href="{{ $url }}" class="active">{{ $page }}</a>
            @else
                <a href="{{ $url }}">{{ $page }}</a>
            @endif
        @endforeach

        {{-- Next Arrow --}}
        @if ($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" class="arrow">→</a>
        @else
            <span class="arrow disabled">→</span>
        @endif
    </div>
@endif

@endsection