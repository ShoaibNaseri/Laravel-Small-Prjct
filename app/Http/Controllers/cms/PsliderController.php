<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Pslider;
use Illuminate\Http\Request;

class PsliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sliders = Pslider::all();
        return view('cms.pharma_slider.index', compact(['sliders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cms.pharma_slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $slider = ["title_en" => $request->title_en,"button_en" => $request->button_en, "subtitle_en" => $request->subtitle_en];
        $imagePath = $request->file('image')->store('public/images/pslides');
        $image = basename($imagePath);
        $slider["image"] = $image;
        Pslider::create($slider);
        return redirect(route('pslider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pslider  $pslider
     * @return \Illuminate\Http\Response
     */
    public function show(Pslider $pslider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pslider  $pslider
     * @return \Illuminate\Http\Response
     */
    public function edit(Pslider $pslider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pslider  $pslider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pslider $pslider)
    {
        //
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pslider  $pslider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pslider $pslider)
    {
        //
        $pre_image = $pslider->image;
        Storage::delete('public/images/pslides/' . $pre_image);
        $pslider->delete();
        return back();
    }
}
