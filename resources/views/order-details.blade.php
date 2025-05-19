@extends('layouts.admin')
@push('styles')
 <link
    rel="stylesheet"
    href="{{asset('css/order-details.css')}}"/>
@endpush
@section('content')
  <div class="order-details-wrapper">
        <div class="main-content">
            <div class="main-content-inner">
                <div class="main-content-wrap">
                    <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                        <h3>Order Details</h3>
                        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10" role="navigation">
                            <li>
                                <a href="#">
                                    <div class="text-tiny">Dashboard</div>
                                </a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i>
                            </li>
                            <li>
                                <div class="text-tiny">Order Items</div>
                            </li>
                        </ul>
                    </div>
<div class="order-items-box">
                    <div class="wg-box">
                        <div class="flex items-center justify-between gap10 flex-wrap">
                            <div class="wg-filter flex-grow">
                                <h5>Ordered Items</h5>
                            </div>
                            <a class="tf-button style-1 w208" href="orders.html">Back</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-center">Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orderItems as $item)
                                    <tr>
                                        <td class="pname">
                                            <div class="image">
                                                <img src="/Admin/asset/images/product1.png" alt="{{$item->product->product_name}}" class="image">
                                            </div>
                                            <div class="name">
                                                <p>{{$item->product->product_name}}</p>
                                            </div>
                                        </td>
                                        <td class="text-center">{{$item->price}}</td>
                                        <td class="text-center">{{$item->quatity}}</td>
                                    <td class="text-center">  
                                    <div class="list-icon-function view-icon">
                                        <div class="item eye">
                                         <i class="fas fa-eye"></i>
                                         </div>
                                    </div>
                                    </td>
                                    </tr>
                             </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="update-order-status-container">
            <div class="order-status-select">
                <label for="orderStatus">Update Order Status:</label>
                <select id="orderStatus">
                    <option>Ordered</option>
                    <option>Processing</option>
                    <option>Shipped</option>
                    <option>Delivered</option>
                    <option>Cancelled</option>
                </select>
            </div>
            <button class="update-status-button">Update Status</button>
        
        </div>
    </div>
@endsection