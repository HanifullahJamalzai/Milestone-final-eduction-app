<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Trainer;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::paginate(10);
        // $courses = Course::all();

        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trainers = Trainer::all();
        return view('admin.course.create', compact('trainers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'trainer'        => 'required',
            'title'          => 'required|min:3|max:255',
            'description'    => 'required',
            'price'          => 'required',
            'available_seat' => 'required',
            'schedule'       => 'required',
            'photo'          => 'required',
        ]);

        $course = new Course();
        $course->trainer_id = $request->trainer;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->available_seat = $request->available_seat;
        $course->schedule = $request->schedule;
        
        if($request->hasFile('photo'))
        {
            $fileName = 'course_'.date('YmdHis').'_'.rand(10,10000).'.'.$request->photo->extension();
            $request->photo->storeAs('/photo/course/', $fileName, 'public');
            $course->photo = '/storage/photo/course/'.$fileName;
        }

        $course->save();

        session()->flash('success', 'Course has been added to Database');
        return redirect('admin/course');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
