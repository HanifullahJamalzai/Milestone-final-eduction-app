<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VerifyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function verify($token)
    {
        $isToken = VerifyUser::where('token', $token)->first();
        if($isToken){
            $user = User::find($isToken->user_id);
            $user->email_verified_at = Carbon::now();
            $user->save();

            session()->flash('success', 'You have successfully Verified Please login to proceed');
            return redirect('login');
        }else{
            return abort(404);
        }
    }
}
