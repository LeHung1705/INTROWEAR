@extends('layouts.admin')
@section('content')
  <div class="container">
            <div class="main">
                <nav class="sidebar">
                    <a
                        href="/Admin/manage-product.html"
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
                        href="/Admin/addproduct.html"
                        class="nav-button"
                        style="text-decoration: none"
                        >ADD PRODUCT</a
                    >
                    <a
                        href="/Admin/update-product.html"
                        class="nav-button current-button"
                        style="text-decoration: none"
                        >UPDATE PRODUCT</a
                    >
                    <a
                        href="/Admin/create-coupon.html"
                        class="nav-button"
                        style="text-decoration: none"
                        >COUPON</a
                    >
                </nav>

                <div class="content">
                    <!-- Nội dung trang đặt ở đây -->
                    <div class="update-product">
                        <h1 class="update-title">UPDATE PRODUCT</h1>

                        <div class="update-form">
                            <div class="product-image">
                                <img
                                    src="https://product.hstatic.net/200000677367/product/7_ao_dai_do_32723ab387944e908365f43c98cdd94d_master.jpg"
                                    alt="Product image"
                                />
                                <p>THE STAR BIG BOXY T-SHIRT</p>
                            </div>

                            <div class="form-fields">
                                <div class="form-group">
                                    <label for="product-name"
                                        >Tên sản phẩm:</label
                                    >
                                    <input type="text" id="product-name" />
                                </div>

                                <div class="form-group">
                                    <label for="original-price">Giá gốc:</label>
                                    <input type="text" id="original-price" />
                                </div>

                                <div class="form-group">
                                    <label for="image-link"
                                        >Link hình ảnh:</label
                                    >
                                    <input type="file" id="image-link" />
                                </div>

                                <div class="form-group">
                                    <label for="sale-price"
                                        >Giá khuyến mãi:</label
                                    >
                                    <input type="text" id="sale-price" />
                                </div>

                                <div class="form-group">
                                    <label for="detail"
                                        >Thông tin chi tiết:</label
                                    >
                                    <textarea id="detail"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="sale-percent"
                                        >Phần trăm khuyến mãi:</label
                                    >
                                    <input type="text" id="sale-percent" />
                                </div>

                                <div class="form-group">
                                    <label for="category">Danh mục:</label>
                                    <input type="text" id="category" />
                                </div>

                                <div class="form-group">
                                    <label for="start-date"
                                        >Ngày bắt đầu khuyến mãi:</label
                                    >
                                    <input type="date" id="start-date" />
                                </div>

                                <div class="form-group">
                                    <label for="quantity"
                                        >Số lượng sản phẩm trong kho:</label
                                    >
                                    <input type="text" id="quantity" />
                                </div>

                                <div class="form-group">
                                    <label for="end-date"
                                        >Ngày kết thúc khuyến mãi:</label
                                    >
                                    <input type="date" id="end-date" />
                                </div>

                                <div class="form-group">
                                    <label for="status"
                                        >Tình trạng sản phẩm:</label
                                    >
                                    <select id="status">
                                        <option>Khả dụng</option>
                                        <option>Hết hàng</option>
                                        <option>Ngừng kinh doanh</option>
                                    </select>
                                </div>

                                <div class="button-wrapper">
                                    <button class="save-update">
                                        LƯU THAY ĐỔI
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection