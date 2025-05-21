 @extends('layouts.admin')
 @push('styles')
    <link rel="stylesheet" href="{{ asset('css/coupon.css') }}" />
@endpush
 @section('content')
 

 
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
                    
@endsection