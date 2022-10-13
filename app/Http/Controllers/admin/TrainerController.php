<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainerStoreRequest;
use App\Http\Requests\TrainerUpdateRequest;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::paginate(4);
        // $trainers = Trainer::all();
        // $trainers = Trainer::get();
        // dd($trainers);
        return view('admin.trainer.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainerStoreRequest $request)
    {
        $trainer = new Trainer();
        $trainer->name = $request->name;
        $trainer->bio  = $request->bio;
        $trainer->category = $request->category;
        $trainer->fb_link  = $request->fb_link;
        $trainer->twitter_link  = $request->twitter_link;
        $trainer->instagram_link  = $request->instagram_link;
        $trainer->linkedin_link  = $request->linkedin_link;

        // dd($request->File('photo'));
        if($request->hasFile('photo'))
        {
            $fileName = 'trainer_'.date('YmdHis').'_'.rand(10, 10000).'.'.$request->File('photo')->extension();
            $request->photo->storeAs('/photo/trainer', $fileName, 'public');
            $trainer->photo = '/storage/photo/trainer/'.$fileName;
        }
        $trainer->save();

        session()->flash('success', 'You have successfully Added a new Trainer');

        return redirect('admin/trainer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        return view('admin.trainer.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
       return view('admin.trainer.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrainerUpdateRequest $request, Trainer $trainer)
    {
        $trainer->name = $request->name;
        $trainer->bio  = $request->bio;
        $trainer->category = $request->category;
        $trainer->fb_link  = $request->fb_link;
        $trainer->twitter_link  = $request->twitter_link;
        $trainer->instagram_link  = $request->instagram_link;
        $trainer->linkedin_link  = $request->linkedin_link;

        // dd($request->File('photo'));
        if($request->hasFile('photo'))
        {
            @unlink(public_path().'/'.$trainer->photo);
            $fileName = 'trainer_'.date('YmdHis').'_'.rand(10, 10000).'.'.$request->File('photo')->extension();
            $request->photo->storeAs('/photo/trainer', $fileName, 'public');
            $trainer->photo = '/storage/photo/trainer/'.$fileName;
        }
        $trainer->save();
        
        session()->flash('success', 'You have successfully Update a Trainer');

        return redirect('admin/trainer');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        @unlink(public_path().'/'.$trainer->photo);
        $trainer->delete();
        
        session()->flash('success', 'You have successfully Deleted a Trainer');

        return back();
    }

    public function search(Request $request)
    {
        $trainers = Trainer::where('name', 'LIKE', '%'.$request->search.'%')->get();
        
        return view('admin.trainer.search', compact('trainers'));
    }
}
