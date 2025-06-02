<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Auth\LoginController;

class UserController extends Controller
{


public function index()
{
   
    $user = Auth::user();
        return view('user.index', compact('user'));
}

public function edit_details(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
    'password' => 'nullable|confirmed|min:6', // <-- Kiểm tra xác nhận mật khẩu
    'current_password' => 'nullable|required_with:password'
    ]);

    $user = Auth::user(); // Lấy user hiện tại
     if ($request->filled('password')) {
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng.'])->withInput();
        }
        $user->password = Hash::make($request->password);
    }

    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->email = $request->email;

   

    $user->save();

    return redirect()->route('user.index')->with('status', 'Cập nhật thông tin thành công!');
}

}
