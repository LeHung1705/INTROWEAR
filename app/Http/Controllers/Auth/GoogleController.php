<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    /**
 * @return response()
 */
    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();
        $findUser = User::where("google_id", $user->id)->first();

        if (!is_null($findUser)) {
            Auth::login($findUser);
        } else {
            $findUser = User::create([
                "name" => $user->name,
                "email" => $user->email,
                "google_id" => $user->id,
                "password" => encrypt('123456789'),
                'phone' => null,
            ]);
            Auth::login($findUser);
        }

        return redirect("home");
    }
}
