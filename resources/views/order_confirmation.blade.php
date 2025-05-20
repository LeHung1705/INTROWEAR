@extends("layouts.app")
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/order-confirmation.css') }}">
@endpush
@section('content')
  <section class="shop-checkout container">
    <div class="check-icon">
    <i class="fa-solid fa-check"></i>
  </div>
          <h3>Your order is completed!</h3>
          <p>Thank you. Your order has been received.</p>
        <div class="checkout__totals-wrapper">
          <div class="checkout__totals">
            <h3>Order Details</h3>
            <table class="checkout-cart-items">
              <thead>
                <tr>
                  <th>PRODUCT</th>
                  <th>QUANTITY</th>
                </tr>
              </thead>
              <tbody>
              @foreach($order->orderItems as $item)
                <tr>
                  <td>
                   {{$item->product->product_name}}
                  </td>
                  <td>
                  {{$item->quantity}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <table class="checkout-totals">
              <tbody>
                <tr>
                  <th>SHIPPING</th>
                  <td>20,000VND</td>
                </tr>
                <tr>
                  <th>TOTAL</th>
                  <td>{{ number_format(floatval(str_replace(',', '', $order->total)), 0, '.', ',') }}VND
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
@endsection