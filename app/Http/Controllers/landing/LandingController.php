<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Event;
use App\Models\Hero;
use App\Models\LandingTitle;
use App\Models\Setting;
use App\Models\Testimonial;
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
        $courses      = Course::inRandomOrder()->limit(3)->get();
        $trainers     = Trainer::inRandomOrder()->limit(3)->get();

        return view('landing.index', compact('trainers','landingTitle', 'hero', 'wcm', 'courses'));
    }

    public function about()
    {
        $hero         = Hero::first();
        $testimonials = Testimonial::all();
        $eventCount   = Event::count();
        $trainerCount = Trainer::count();
        $courseCount  = Course::count();
        
        return view('landing.about', compact('hero', 'testimonials', 'eventCount', 'trainerCount', 'courseCount'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('landing.contact',compact('contact'));
    }

    public function course()
    {
        $courses = Course::all();
        return view('landing.course', compact('courses'));
    }

    public function courseDetail($id)
    {
        $course = Course::find($id);

        return view('landing.courseDetail', compact('course'));
    }

    public function event()
    {
        $events = Event::all();
        return view('landing.event', compact('events'));
    }

    public function trainer()
    {
        $trainers = Trainer::all();

        return view('landing.trainer', compact('trainers'));
    }
}
