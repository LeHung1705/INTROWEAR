@extends('layouts.app')
@section('content')
  <!-- Breadcrumb -->
  <div class="breadcrumb-bar">
    <div class="breadcrumb-text">
      <span id="breadcrumb-home" style="cursor: pointer;">Trang chủ</span> / <span>Giỏ hàng</span>
    </div>
  </div>
    <!-- Giỏ hàng -->
    <div class="cart-container">
        @if($items->count() > 0)
      <div class="cart-table__wrapper">
        <h1 style="padding-bottom:20px;">Giỏ hàng</h1>
        <table class="cart-table">
          <thead>
            <tr>
              <th>Product</th>
              <th></th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Subtotal</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="shopping-cart__product-item">
                  <img loading="lazy" src="assets/images/cart-item-1.jpg" width="120" height="120" alt="" />
                </div>
              </td>
              <td>
                <div class="shopping-cart__product-item__detail">
                  <h4>Zessi Dresses</h4>
                  <ul class="shopping-cart__product-item__options">
                    <li>Color: Yellow</li>
                    <li>Size: L</li>
                  </ul>
                </div>
              </td>
              <td>
                <span class="shopping-cart__product-price">$99</span>
              </td>
              <td>
                <div class="qty-control position-relative">
                  <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                  <div class="qty-control__reduce">-</div>
                  <div class="qty-control__increase">+</div>
                </div>
              </td>
              <td>
                <span class="shopping-cart__subtotal">$297</span>
              </td>
              <td>
                <a href="#" class="remove-cart">
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                    <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                  </svg>
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <div class="shopping-cart__product-item">
                  <img loading="lazy" src="assets/images/cart-item-2.jpg" width="120" height="120" alt="" />
                </div>
              </td>
              <td>
                <div class="shopping-cart__product-item__detail">
                  <h4>Kirby T-Shirt</h4>
                  <ul class="shopping-cart__product-item__options">
                    <li>Color: Yellow</li>
                    <li>Size: L</li>
                  </ul>
                </div>
              </td>
              <td>
                <span class="shopping-cart__product-price">$99</span>
              </td>
              <td>
                <div class="qty-control position-relative">
                  <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                  <div class="qty-control__reduce">-</div>
                  <div class="qty-control__increase">+</div>
                </div>
              </td>
              <td>
                <span class="shopping-cart__subtotal">$297</span>
              </td>
              <td>
                <a href="#" class="remove-cart">
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                    <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                  </svg>
                </a>
              </td>
            </tr>
            <tr>
              <td>
                <div class="shopping-cart__product-item">
                  <img loading="lazy" src="assets/images/cart-item-3.jpg" width="120" height="120" alt="" />
                </div>
              </td>
              <td>
                <div class="shopping-cart__product-item__detail">
                  <h4>Cobleknit Shawl</h4>
                  <ul class="shopping-cart__product-item__options">
                    <li>Color: Yellow</li>
                    <li>Size: L</li>
                  </ul>
                </div>
              </td>
              <td>
                <span class="shopping-cart__product-price">$99</span>
              </td>
              <td>
                <div class="qty-control position-relative">
                  <input type="number" name="quantity" value="3" min="1" class="qty-control__number text-center">
                  <div class="qty-control__reduce">-</div>
                  <div class="qty-control__increase">+</div>
                </div>
              </td>
              <td>
                <span class="shopping-cart__subtotal">$297</span>
              </td>
              <td>
                <a href="#" class="remove-cart">
                  <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                    <path d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                  </svg>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="cart-table-footer">
          <form action="#" class="position-relative bg-body">
            <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
            <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit"
              value="APPLY COUPON">
          </form>
          <button class="btn btn-light">UPDATE CART</button>
        </div>
      </div>
      <div class="shopping-cart__totals-wrapper">
        <div class="sticky-content">
          <div class="shopping-cart__totals">
            <h3>Cart Totals</h3>
            <table class="cart-totals">
              <tbody>
                <tr>
                  <th>Subtotal</th>
                  <td>$1300</td>
                </tr>
                <tr>
                  <th>Shipping</th>
                  <td>
                     20.000VND
                  </td>
                </tr>
                <tr>
                  <th>Total</th>
                  <td>$1319</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="mobile_fixed-btn_wrapper">
            <div class="button-wrapper container">
              <a href="checkout.html" class="btn btn-primary btn-checkout">PROCEED TO CHECKOUT</a>
            </div>
          </div>
        </div>
      </div>
      @else
        <div class="empty-cart">
            <h2>Giỏ hàng của bạn đang trống</h2>
            <p>Hãy thêm sản phẩm vào giỏ hàng để bắt đầu mua sắm!</p>
            <a href="{{ route('home') }}" style="display: inline-block; padding: 10px 20px; background-color: #17a2b8; color: #fff; text-decoration: none; border-radius: 5px; text-align: center;">Tiếp tục mua sắm</a>
        </div>
@endsection