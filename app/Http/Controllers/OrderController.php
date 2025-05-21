<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrderController extends Controller
{
    public function orders(Request $request)
{
    $query = Order::query();
    $search = $request->input('search', '');  // Lấy giá trị tìm kiếm từ request, mặc định là rỗng
    if (!empty($search)) {
        // Nếu có giá trị tìm kiếm, chỉ lấy các đơn hàng có tên người dùng chứa giá trị tìm kiếm
        $query->where('name', 'like', '%' . $search . '%');
    }
    $orders = $query->orderBy('created_at', 'DESC')->paginate(6);
    return view('admin.orders', compact('orders', 'search')); 
}
}
