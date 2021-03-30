<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Dslider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DsliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Dslider::all();
        return view('cms.doctor_slider.index', compact(['sliders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.doctor_slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = ["title_en" => $request->title_en,"button_en" => $request->button_en, "subtitle_en" => $request->subtitle_en];
        $imagePath = $request->file('image')->store('public/images/dslides');
        $image = basename($imagePath);
        $slider["image"] = $image;
        Dslider::create($slider);
        return redirect(route('dslider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dslider  $dslider
     * @return \Illuminate\Http\Response
     */
    public function show(Dslider $dslider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dslider  $dslider
     * @return \Illuminate\Http\Response
     */
    public function edit(Dslider $dslider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dslider  $dslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dslider $dslider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dslider  $dslider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dslider $dslider)
    {
        $pre_image = $dslider->image;
        Storage::delete('public/images/dslides/' . $pre_image);
        $dslider->delete();
        return back();
    }
}
