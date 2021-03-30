<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\cms\SliderRequest;

class SliderController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('cms.slider.index', compact(['sliders']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.slider.create');
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
        $imagePath = $request->file('image')->store('public/images/slides');
        $image = basename($imagePath);
        $slider["image"] = $image;
        Slider::create($slider);
        return redirect(route('slider.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('cms.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $slider_data = $request->validated();
        if ($request->hasFile('image')){
          $pre_image = $slider->image;
          Storage::delete('public/images/slider/' . $pre_image);
          $image_path = $request->file('image')->store('public/images/slides');
          $image = basename($image_path);
          $slider_data['image'] = $image;
        }
        $slider->update($slider_data);
        return redirect(route('slider.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $pre_image = $slider->image;
    Storage::delete('public/images/slides/' . $pre_image);
    $slider->delete();
    return back();
    }
}
