@extends('layouts.admin')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/create-coupon.css') }}" />
@endpush
@section('content')

                    <!-- Nội dung trang đặt ở đây -->
                    <div class="create-coupon-title font-trispace">
                        CREATE COUPON
                    </div>
                    <form class="create-coupon-form"  enctype="multipart/form-data" method="POST" action="{{route('admin.coupon.store')}}">
                    @csrf
                        <div class="form-group">
                            <label for="coupon-id" class="font-trispace"
                                >Mã khuyến mãi</label
                            >
                            <input
                                type="text"
                                id="coupon-id"
                                name="coupon_code"
                                  required
                                value={{old('coupon_code')}}
                              
                            >
                        </div>
                        <div class="form-group">
                            <label for="coupon-percent" class="font-trispace"
                                >% Khuyến mãi</label
                            >
                            <input
                                type="text"
                                id="discount_percentage"
                                name='discount_percentage'
                                required
                               value={{old('discount_percentage')}}
                                
                            >
                        </div>
                        <div class="form-group">
                            <label for="description" class="font-trispace"
                                >Mô tả</label>
                           <textarea id="description" name="description"> {{old( 'description')}} </textarea>
                            
                        </div>
                        <div class="form-group">
                            <label for="coupon-start-date" class="font-trispace"
                                >Ngày bắt đầu</label
                            >
                            <input
                                type="date"
                                id="coupon-start-date"
                                name="start_date"
                                  required
                                value={{old( 'start_date')}}
                              
                            />
                        </div>
                        <div class="form-group">
                            <label for="coupon-end-date" class="font-trispace"
                                >Ngày kết thúc</label
                            >
                            <input
                                type="date"
                                id="coupon-end-date"
                                name="end_date"
                                required
                                 value={{old( 'end_date')}}

                                
                            />
                        </div>
                        <input
                            type="submit"
                            value="CREATE"
                            class="submit-button font-trispace"
                        />
                    </form>
               
@endsection