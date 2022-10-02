<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Hero;
use App\Models\LandingTitle;
use App\Models\Setting;
use App\Models\Trainer;
use App\Models\WCM;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $landingTitle = LandingTitle::first();
        $hero         = Hero::first();
        $wcm          = WCM::all();
        $setting      = Setting::first();
        $courses      = Course::inRandomOrder()->limit(3)->get();
        $trainers     = Trainer::inRandomOrder()->limit(3)->get();

        return view('landing.index', compact('trainers','landingTitle', 'hero', 'wcm', 'setting', 'courses'));
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
