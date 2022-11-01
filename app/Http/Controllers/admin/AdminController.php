<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        // $courses = Course::with('comments')->get();
        return view('admin.index', compact('courses'));
    }
}
