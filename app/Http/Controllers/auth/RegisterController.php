<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyUserMail;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|min:6|max:255',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role'   => 2,
        ]);

        $verify = VerifyUser::create([
            'user_id' => $user->id,
            'token'   => str()->random(60)
        ]);

        Mail::to($request->email)->send(new VerifyUserMail($verify->token));

        session()->flash('success', 'You have registered successfully Please Verify your email');
        return redirect('login');
    }
}
