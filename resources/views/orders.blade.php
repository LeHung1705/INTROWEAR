@extends('layouts.admin')
@push('styles')
  <link rel="stylesheet" href="{{asset('/css/orders.css') }}" />
@endpush

@section('content')
<div class="orders-container">
                        <div class="orders-title">
                            <span style="font-size: 30px; font-weight: 600"
                                >Orders</span
                            >
                            <div class="breadcrumb-bar">
                                <a href="{{route('dashboard')}}">Dashboard</a>
                                <span>></span>
                                <a href="{{route('orders')}}">Orders</a>
                            </div>
                        </div>
                        <div class="orders-table-container">
                            <div style="width: 95%">
                                <div class="search-box">
                                    <input
                                        type="text"
                                        placeholder="Search here..."
                                    /><i
                                        class="fa-solid fa-magnifying-glass fa-2xs"
                                        style="color: #c7e0f5"
                                    ></i>
                                </div>
                            </div>
                            <div class="table-viewport">
                                <table class="orders-table">
                                    <thead>
                                        <tr>
                                            <th style="width: 70px">OrderNo</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">
                                                Order Date
                                            </th>
                                            <th class="text-center">
                                                Total Items
                                            </th>
                                            <th class="text-center">
                                                Delivered On
                                            </th>
                                            <th class="text-center">
                                                Canceled On
                                            </th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                        <tr>
                            <td class="text-center">{{$order->id}}</td>
                            <td class="text-center">{{$order->name}}</td>
                            <td class="text-center">{{$order->phone}}</td>
                            <td class="text-center">{{$order->total}}</td>
                            <td class="text-center">
                             @if ($order->status == 'delivered')
                              <span class="badge bg-success">Delivered</span>
                             @elseif ($order->status == 'canceled')
                              <span class="badge bg-danger">Canceled</span>
                            @else
                             <span class="badge bg-warning">Ordered</span>
                            @endif
                        </td>
                            <td class="text-center">{{$order->created_at}}</td>
                            <td class="text-center">{{$order->orderItems->count()}}</td>
                            <td>{{$order->delivered_date}}</td>
                            <td>{{$order->canceled_date}}</td>
                            <td class="text-center">
                                <a href="{{ route('order.details', ['order_id' => $order->id]) }}">
                                    <div class="list-icon-function">
                                        <div class="item eye">
                                            <i class="fa-solid fa-eye"></i>
                                        </div>
                                    </div>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                                    </tbody>
                
                                </table>
                      <div class="flex items-center justify-between flex-wrap gap10 wgp-pagination">
                {{$orders->links('pagination::Bootstrap-5')}}
                                    </div>
                            </div>
    
                        </div>
</div>

@endsection