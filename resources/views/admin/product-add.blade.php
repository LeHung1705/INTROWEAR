@extends('layouts.admin')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/addproduct.css') }}" />
@endpush

@section('content')

                    <!-- Form Thêm Sản Phẩm -->
                    <div class="add-product-form">
                        <h2>Thêm Sản Phẩm</h2>
                        <form  enctype="multipart/form-data" method='post' action="{{route('admin.store')}}">
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
                            @error('product_name') <span class="alert alert-danger text-center">{{$message}}</span>
                            @enderror
                             <div class="form-group">
                                <label for="category_id">Danh mục:</label>
                                <input
                                    type="text"
                                    id="category_id"
                                     name='category_id'
                                    value="{{old('category_id')}}"
                                   
                                    
                                />
                            </div>
                               
                                <div class="form-group">
                                <label for="supplier_id">Nhà cung cấp:</label>
                                <input
                                    type="text"
                                    id="supplier_id"
                                     name='supplier_id'
                                    value="{{old('supplier_id')}}"
                                   
                                    
                                />
                                  </div>
                            <div class="form-group">
                                <label for="size">Kích cỡ:</label>
                                <input
                                    type="text"
                                    id="size"
                                     name='size'
                                    value="{{old('size')}}"
                                   
                                    
                                />  </div>
                                 @error('size') <span class="alert alert-danger text-center">{{$message}}</span>
                            @enderror
                          
                             <div class="form-group">
                                <label for="color">Màu sắc:</label>
                                <input type="text" id="color" name="color"  value="{{old('color')}}" />
                            </div>
                             @error('color') <span class="alert alert-danger text-center">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="description">Mô tả:</label>
<textarea id="description" name="description">{{ old('description') }}</textarea>
                            </div>
                             @error('description') <span class="alert alert-danger text-center">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="price">Giá gốc:</label>
                                <input
                                    type="text"
                                    id="price"
                                    name="price"
                                    value="{{old('price')}}"
                                   
                                />
                            </div>
                             @error('price') <span class="alert alert-danger text-center">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="price_sale">Giá khuyến mãi:</label>
                                <input
                                    type="text"
                                    id="price_sale"
                                    name="price_sale"

                                    value="{{old('price_sale')}}"
                                   
                                />
                                
                            </div>
                             @error('price_sale') <span class="alert alert-danger text-center">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label for="stock">Tồn kho:</label>
                                <input
                                    type="number"
                                    id="stock"
                                    name="stock_quantity"
                                    value="{{old('stock_quantity')}}"
                                   
                                />
                            </div>
                             @error('stock_quantity') <span class="alert alert-danger text-center">{{$message}}</span>
                            @enderror
                            <div class="form-group">
                                <label >Tải lên hình ảnh chính
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
                
@endsection