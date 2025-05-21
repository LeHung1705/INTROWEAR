@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/manage-product.css') }}" />
@endpush
@section('content')

          
              {{-- <nav class="sidebar">
                    <a
                        href="{{route('admin.products')}}"
                        class="nav-button current-button"
                        style="text-decoration: none"
                        >MANAGE PRODUCT</a
                    >

                    <a
                        href="/Admin/orders.html"
                        class="nav-button"
                        style="text-decoration: none"
                        >ORDERS</a
                    >

                    <a
                        href="{{route('admin.product-add')}}"
                        class="nav-button"
                        style="text-decoration: none"
                        >ADD PRODUCT</a
                    >
                    <a
                        href="/Admin/update-product.html"
                        class="nav-button"
                        style="text-decoration: none"
                        >UPDATE PRODUCT</a
                    >
                    <a
                        href="/Admin/create-coupon.html"
                        class="nav-button "
                        style="text-decoration: none"
                        >COUPON</a
                    >
                </nav> --}}

          <div class="manage-product">
                <h1 class="title">MANAGE PRODUCT</h1>

                <div class="action-bar">
                <button class="btn"><i class="fas fa-search"></i>Tìm kiếm sản phẩm</button>
                <button class="btn"><i class="fas fa-plus"></i>Thêm sản phẩm</button>
                <button class="btn"><i class="fas fa-filter"></i>Tất cả trạng thái</button>
                </div>
          @if (Session::has('status'))
              <p class='alert alert-success' style="color:red; text-align: center">{{Session::get('status')}}   </p>
          @endif
                <table class="product-table">
                <thead>
                    <tr>
                    <th>STT</th>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Tình trạng</th>
                    <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ( $products as $product )
                    
                
                    <tr>
                    <td>{{$product->id}}</td>
                    <td><img src="{{asset('uploads')}}/{{$product->image}}" alt="{{$product->product_name}}"></td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->price}}đ</td>
                    <td class="status in-stock">{{$product->status_product}}</td>
                    <td>
                        <a class="fas fa-pen edit"  href="{{route('admin.update',['id'=>$product->id])}}"></a>
                        <i class="fas fa-trash delete"></i>
                        
                    </td>
                    </tr>
                   
                    
                    
                    @endforeach
                </tbody>
                </table>
        
           </div>
       
        
            
@endsection