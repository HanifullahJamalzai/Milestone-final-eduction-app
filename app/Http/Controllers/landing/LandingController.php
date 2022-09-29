<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function course()
    {
        return view('landing.course');
    }

    public function event()
    {
        return view('landing.event');
    }

    public function trainer()
    {
        return view('landing.trainer');
    }
}
