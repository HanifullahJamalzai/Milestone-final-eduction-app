<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WCM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class WCMController extends Controller
{
    public function __construct()
    {
        return Gate::authorize('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wcms = WCM::all();
        // $wcms = [];
        // dd($wcms);
        return view('admin.wcm.index', compact('wcms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.wcm.create');
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
            'title' => 'required|min:8|max:255',
            'icon'  => 'required|min:4|max:255',
            'description'  => 'required|min:4',
        ]);

       WCM::create([
        'title' => $request->title,
        'icon'  => $request->icon,
        'description' => $request->description 
       ]);

        // WCM::create($request->all());

       session()->flash('success', 'You have successfully added a new WCM');
       return redirect('wcm');
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
    public function edit(WCM $wcm)
    {
        return view('admin.wcm.edit', compact('wcm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WCM $wcm)
    {
        // dd($request->all(), $wcm);
        $request->validate([
            'title' => 'required|min:8|max:255',
            'icon'  => 'required|min:4|max:255',
            'description'  => 'required|min:4',
        ]);

        $wcm->update([
            'title' => $request->title,
            'icon'  => $request->icon,
            'description' => $request->description,
        ]);

        session()->flash('success', 'You have successfully Update the WCM');
        return redirect('wcm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(WCM $wcm)
    {
        // $wcm = WCM::find($id);
        // dd($wcm);
        $wcm->delete();

        session()->flash('success', 'You have successfully Deleted  WCM');
        return redirect('wcm');
    }
}
