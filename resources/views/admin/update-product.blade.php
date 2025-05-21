@extends('layouts.admin')
@push('styles')
        <link rel="stylesheet" href="{{ asset('css/update-product.css') }}"  />

@endpush

@section('content')
 
                    <!-- Nội dung trang đặt ở đây -->
                    <div class="update-product">
                        <h1 class="update-title">UPDATE PRODUCT</h1>
                <form  enctype="multipart/form-data" method='post' action="">
                        @csrf
                        <input type="hidden" name="id" value="$product->id">
                        <div class="update-form">
                             <div id="product-image">
                                <img
                                 id="preview-image"
                                    src="{{asset('uploads')}}/{{$product->image}}"
                                    alt="Product image"
                                    style="height: 270px; width: 270px;"
                                />
                                <p>{{$product->product_name}}</p>
                            </div>

                            <div class="form-fields">
                                <div class="form-group">
                                
                                    <label for="product-name"
                                        >Tên sản phẩm:</label
                                    >
                                    <input type="text" id="product-name" value="{{$product->product_name}}" />
                                </div>

                                <div class="form-group">
                                    <label for="original-price">Giá gốc:</label>
                                    <input type="text" id="original-price"   value="{{$product->price}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="image-link"
                                        >Link hình ảnh:</label
                                    >
                                    <input type="file" id="image-link" value="{{$product->image}}"/>
                                </div>

                                <div class="form-group">
                                    <label for="sale-price"
                                        >Giá khuyến mãi:</label
                                    >
                                    <input type="text" id="sale-price" value="{{$product->price_sale}}" />
                                </div>

                                <div class="form-group">
                                    <label for="detail"
                                        >Thông tin chi tiết:</label
                                    >
                                    <textarea id="detail" >{{$product->description}}</textarea>
                                </div>

                                 {{-- <div class="form-group">
                                    <label for="sale-percent"
                                        >Danh mục:</label
                                    >
                                    <input type="text" id="sale-percent" />
                                </div>  --}}

                                <div class="form-group">
                                    <label for="category">Danh mục:</label>
                                    <input type="text" id="category" value="{{$product->category_id}}" />
                                </div>
                                <div class="form-group">
                                    <label for="color"
                                        >Màu sắc:</label
                                    >
                                    <input type="text" id="color"  value="{{$product->color}}"/>
                                </div>  

                                <div class="form-group">
                                    <label for="quantity"
                                        >Số lượng sản phẩm trong kho:</label
                                    >
                                    <input type="text" id="quantity" value="{{$product->stock_quantity}}" />
                                </div>

                                <div class="form-group">
                                    <label for="size"
                                        >Kích thước:</label
                                    >
                                    <input type="text" id="size" value="{{$product->size}}"  />
                                </div> 

                                <div class="form-group">
                                    <label for="status"
                                        >Tình trạng sản phẩm:</label
                                    >
                                    <select id="status" >
                                        <option value="Còn hàng"{{$product->status_product=="Còn hàng"?"selected":""}}>Còn hàng</option>
                                        <option value="Hết hàng"{{$product->status_product=="Hết hàng"?"selected":""}}>Hết hàng</option>
                                       
                                    </select>
                               
                            </div> 
                                <div class="button-wrapper">
                                    <button class="save-update">
                                        LƯU THAY ĐỔI
                                    </button>
                                </div>
                            </div>
                                 </div>
                                </form>
                           
                       
                    </div>
               
@endsection

@push('scripts')
<script>
    document.getElementById('image-link').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                document.getElementById('preview-image').src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    });
</script>
@endpush