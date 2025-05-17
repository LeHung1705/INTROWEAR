@extends('layouts.admin')
@section('content')
 <div class="container">
            <div class="main">
               <nav class="sidebar">
                    <a
                        href="{{route('admin.products')}}"
                        class="nav-button "
                        style="text-decoration: none; color: black"
                        >MANAGE PRODUCT</a
                    >
                    <a
                        href="/Admin/cso.html"
                        class="nav-button"
                        style="text-decoration: none; color: black"
                        >CONFIRM STATUS ORDER
                    </a>
                    <a
                        href="/Admin/addproduct.html"
                        class="nav-button current-button"
                        style="text-decoration: none; color: black"
                        >ADD PRODUCT</a
                    >
                    <a
                        href="/Admin/update-product.html"
                        class="nav-button"
                        style="text-decoration: none; color: black"
                        >UPDATE PRODUCT</a
                    >
                    <a
                        href="/Admin/create-coupon.html"
                        class="nav-button"
                        style="text-decoration: none; color: black"
                        >CREATE COUPON</a
                    >
                </nav>
                <div class="content">
                    <!-- Form Thêm Sản Phẩm -->
                    <div class="add-product-form">
                        <h2>Thêm Sản Phẩm</h2>
                        <form method='POST' enctype="multipart/form-data" action="{{route('admin.product.store')}}">
                        @csrf
                            <div class="form-group">
                                <label for="productName">Tên sản phẩm:</label>
                                <input
                                    type="text"
                                    id="productName"
                                    name="product_name"
                                    value="{{old('product_name')}}"
                                    
                                />
                              
                            </div>
                            <div class="form-group">
                                <label for="size">Kích cỡ:</label>
                                <input
                                    type="text"
                                    id="size"
                                     name='size'
                                    value="{{old('size')}}"
                                   
                                    
                                />
                            </div>
                             <div class="form-group">
                                <label for="color">Màu sắc:</label>
                                <input type="text" id="color" name="color"  value="{{old('color')}}" />
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả:</label>
                                <textarea id="description" name="description" value="{{old('description')}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Giá gốc:</label>
                                <input
                                    type="text"
                                    id="price"
                                    name="price";
                                    value="{{old('price')}}"
                                   
                                />
                            </div>
                            <div class="form-group">
                                <label for="price_sale">Giá khuyến mãi:</label>
                                <input
                                    type="text"
                                    id="price_sale"
                                    name="price_sale"

                                    value="{{old('price')}}"
                                   
                                />
                            </div>
                            <div class="form-group">
                                <label for="stock">Tồn kho:</label>
                                <input
                                    type="number"
                                    id="stock"
                                    name="stock_quantity"
                                    value="{{old('stock_quantity')}}"
                                   
                                />
                            </div>
                            <div class="form-group">
                                <label
                                    >Tải lên hình ảnh chính
                                    <span style="color: red">*</span></label
                                >
                                <div class="upload-image">
                                    <div
                                        class="item"
                                        id="imgpreview"
                                        style="display: none"
                                    >
                                        <img
                                            src=""
                                            class="effect8"
                                            alt="Xem trước"
                                        />
                                    </div>
                                    <div id="upload-file" class="item up-load">
                                        <label class="uploadfile" for="myFile">
                                            <span class="icon">
                                                <i
                                                    class="fas fa-cloud-upload-alt"
                                                ></i>
                                            </span>
                                            <span class="body-text"
                                                >Thả hình ảnh vào đây hoặc chọn
                                                <span style="color: #007bff"
                                                    >nhấn để duyệt</span
                                                ></span
                                            >
                                            <input
                                                type="file"
                                                id="myFile"
                                                name="image"
                                                accept="image/*"
                                                required
                                            />
                                        </label>
                                    </div>
                                </div>
                            </div>
                       
                            <div class="form-group">
                                <button type="submit">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection