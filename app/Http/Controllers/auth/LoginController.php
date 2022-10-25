<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // dd(request()->all());
        $request->validate([
            'email'    => 'required|email|max:255',
            'password' => 'required',
        ]);

        if(!auth()->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            session()->flash('error', 'Credentials do not match');
            return back();
            
        }else{
            if(auth()->attempt(['email' => $request->email, 'password' => $request->password])){
                if(auth()->user()->email_verified_at == null){
                    session()->flash('error', 'Please verify your email first');
                    auth()->logout();
                    return redirect('login');
                }else{
                    auth()->attempt(['email' => $request->email, 'password' => $request->password], $request->remember);
                    session()->flash('success', 'Welcome to Dashboard Dear '.auth()->user()->name);
                    return redirect('admin');
                }
            }
        }
    }
}
