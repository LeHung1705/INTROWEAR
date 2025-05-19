 @extends('layouts.admin')
 @push('styles')
    <link rel="stylesheet" href="{{ asset('css/coupon.css') }}" />
@endpush
 @section('content')
 

 <div class="container">
            <div class="main">
                <nav class="sidebar">
                    <a
                        href="{{route('admin.products')}}"
                        class="nav-button"
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
                        href="{{route('admin.coupon')}}"
                        class="nav-button current-button"
                        style="text-decoration: none"
                        >COUPON</a
                    >
                </nav>

                
                          
                      <div class="content">
                    <!-- Nội dung trang đặt ở đây -->

                     <div class="addnew">
                    <a href="{{route('admin.addcoupon')}}" class="add fas fa-plus">Add new</a>
                    </div>
                    <div class="coupon-title font-trispace">
                        COUPON
                    </div>
                   
                    
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Mã khuyến mãi</th>
                                        <th>% khuyến mãi</th>
                                       
                                        <th>Ngày bắt đầu khuyến mãi</th>
                                        <th>Ngày kết thúc khuyến mãi</th>
                                         <th>Mô tả</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>
                                     @foreach ( $coupons as $coupon )
                                    <tr>
                                        <td>{{$coupon->id}}</td>
                                        <td>{{$coupon->coupon_code}}</td>
                                        <td>{{$coupon->discount_percentage}}</td>
                                        
                                        <td>{{ \Carbon\Carbon::parse($coupon->start_date)->format('d/m/Y') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($coupon->start_date)->format('d/m/Y') }}</td>
                                        <td>{{$coupon->description}}</td>
                                        
                                    </tr>
                                      @endforeach
                                </tbody>
                            </table> 
                    </div>
            </div>
        </div>
@endsection