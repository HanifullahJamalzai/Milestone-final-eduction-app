<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return response()->json($data);
    }
}
