@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endpush

@section('content')
<div class="flex gap20 flex-wrap-mobile">
    {{-- Block 1: Total Orders + Ordered Amount --}}
    <div class="w-half">
        <div class="wg-chart-default mb-20">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap14">
                    <div class="image ic-bg">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Total Orders</div>
                        <h4>{{ $orderedCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="wg-chart-default mb-20 mb-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap14">
                    <div class="image ic-bg">
                        <i class="fa-solid fa-dollar-sign"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Ordered Orders Amount</div>
                        <h4>{{ $orderedTotal }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Block 2: Delivered Orders --}}
    <div class="w-half">
        <div class="wg-chart-default mb-20">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap14">
                    <div class="image ic-bg">
                        <i class="fa-solid fa-truck-fast"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Delivered Orders</div>
                        <h4>{{ $deliveredCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="wg-chart-default mb-20 mb-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap14">
                    <div class="image ic-bg">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Delivered Orders Amount</div>
                        <h4>{{ $deliveredTotal }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Block 3: Canceled Orders --}}
    <div class="w-half">
        <div class="wg-chart-default mb-20">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap14">
                    <div class="image ic-bg">
                        <i class="fa-solid fa-ban"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Canceled Orders</div>
                        <h4>{{ $canceledCount }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="wg-chart-default mb-20">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap14">
                    <div class="image ic-bg">
                        <i class="fa-solid fa-money-bill-wave"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Canceled Orders Amount</div>
                        <h4>{{ $canceledTotal }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Block 4: Tổng tiền --}}
    <div class="w-half">
        <div class="wg-chart-default mb-20">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap14">
                    <div class="image ic-bg">
                        <i class="fa-solid fa-coins"></i>
                    </div>
                    <div>
                        <div class="body-text mb-2">Total Amount</div>
                        <h4>{{ $totalAmount }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
