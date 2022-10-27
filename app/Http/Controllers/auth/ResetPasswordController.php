<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMail;
use App\Models\PasswordReset;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ResetPasswordController extends Controller
{
    public function index()
    {
        return view('auth.reset');
    }

    public function resetEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email'
        ]);

        $data = PasswordReset::create([
            'email' => $request->email,
            'token' => str()->random(60),
            'created_at' => Carbon::now(),
        ]);

        Mail::to($request->email)->send(new PasswordResetMail($data->token));

        session()->flash('success', 'We have sent you an Email, Please click to Reset Your Account!');
        return redirect('login');
    }

    public function resetToken($token)
    {
        $isToken = PasswordReset::where('token', $token)->first();
        if($isToken){
            return view('auth.resetForm', compact('isToken'));
        }else{
            return abort(404);
        }
    }

    public function resetSubmit(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|max:255|confirmed'
        ]);
        $isToken = PasswordReset::where('token', $request->token)->first();
        if($isToken){
            $user = User::where('email', $isToken->email)->first();
            $user->password = bcrypt($request->password);
            $user->save();
            session()->flash('success', 'You have changed your password, Please Login to proceed!');
            return redirect('login');

        }else{
            return abort(404);
        }
    }
}
