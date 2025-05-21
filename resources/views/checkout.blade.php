@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/payment.css') }}" />
@endpush

@section('content')
<form name="checkout-form" action="{{route('cart.place.an.order')}}" method="POST">
  @csrf
  <div class="checkout-form">
    <div class="billing-info__wrapper">
      <div class="row">
        <div class="col-6">
          <h3>SHIPPING DETAILS</h3>
        </div>
        <div class="col-6">
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-6">
          <div class="form-floating my-3">
            <input type="text" class="form-control" name="name" required="" value={{old('name')}}>
            <label for="name">Full Name *</label>
            @error('name') <span class="text-danger">{{$message}}</span> @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating my-3">
            <input type="text" class="form-control" name="phone" required="" value={{old('phone')}}>
            <label for="phone">Phone Number *</label>
            @error('phone') <span class="text-danger">{{$message}}</span> @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating my-3">
            <input type="text" class="form-control" name="address" required="" value={{old('address')}}>
            <label for="address">Address *</label>
            @error('address') <span class="text-danger">{{$message}}</span> @enderror
          </div>
        </div>
      </div>
    </div>
    <div class="checkout__totals-wrapper">
      <div class="sticky-content">
        <div class="checkout__totals">
          <h3>Your Order</h3>
          <table class="checkout-cart-items">
            <thead>
              <tr>
                <th align="left">PRODUCT</th>
                <th align="right">SUBTOTAL</th>
              </tr>
            </thead>
            <tbody>
              @foreach(Cart::instance('cart')->content() as $item)
              <tr>
                <td>
                  {{$item->name}} x {{$item->qty}}
                </td>
                <td align="right">
                  {{ number_format((float) str_replace(',', '', $item->subtotal()), 0, ',', '.') }}VND
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @if(Session::has('discounts'))
          <table class="checkout-totals">
            <tbody>
              <tr>
                <th align="left">SUBTOTAL</th>
                <td align="right">
                  {{ number_format((float) str_replace(',', '', Cart::instance('cart')->subtotal()), 0, ',', '.') }}VND
                </td>
              </tr>
              <tr>
                <th>DISCOUNT {{ Session::get('coupon')['code'] }}</th>
                <td align="right">
                  {{ number_format(Session::get('discounts')['discount'], 0, ',', '.') }}VND
                </td>
              </tr>
              <tr>
                <th>SUBTOTAL AFTER DISCOUNT</th>
                <td align="right">
                  {{ number_format(Session::get('discounts')['subtotal'], 0, ',', '.') }}VND
                </td>
              </tr>
              <tr>
                <th align="left">SHIPPING</th>
                <td align="right">
                  {{ number_format(20000, 0, ',', '.') }}VND
                </td>
              </tr>
              <tr>
                <th align="left">TOTAL</th>
                <td align="right">
                  {{ number_format(Session::get('discounts')['total'], 0, ',', '.') }}VND
                </td>
              </tr>
            </tbody>            
          </table>
        @else
          <table class="checkout-totals">
            <tbody>
              <tr>
                <th align="left">SUBTOTAL</th>
                <td align="right">
                  {{ number_format((float) str_replace(',', '', Cart::instance('cart')->subtotal()), 0, ',', '.') }}VND
                </td>
              </tr>
              <tr>
                <th align="left">SHIPPING</th>
                <td align="right">
                  {{ number_format(20000, 0, ',', '.') }}VND
                </td>
              </tr>
              <tr>
                <th align="left">TOTAL</th>
                <td align="right">
                  {{ number_format((float) str_replace(',', '', Cart::instance('cart')->subtotal()) + 20000, 0, ',', '.') }}VND
                </td>
              </tr>
            </tbody>
          </table>
        @endif
        </div>
        <div class="checkout__payment-methods">
          <div class="payment-methods">
              <label class="payment-option">
                <input type="radio" name="mode" value="card" id="mode1" />
                <span>Credit Card</span>
              </label>
            
              <label class="payment-option">
                <input type="radio" name="mode" value="cod" id="mode2" />
                <span>Cash on delivery</span>
              </label>
            
              <label class="payment-option">
                <input type="radio" name="mode" value="vnpay" id="mode3"/>
                <span>VNPAY</span>
              </label>
          </div>
            
          <div class="policy-text">
            Your personal data will be used to process your order, support your experience throughout this
            website, and for other purposes described in our <a href="terms.html" target="_blank">privacy
              policy</a>.
          </div>
        </div>
        <button class="btn btn-primary btn-checkout">PLACE ORDER</button>
      </div>
    </div>
  </div>
</form>
@endsection