<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('cms.partner.index', compact(['partners']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = ["name" => $request->name,"webpage_link" => $request->webpage_link];
        $imagePath = $request->file('image')->store('public/images/partners');
        $image = basename($imagePath);
        $partner["image"] = $image;
        Partner::create($partner);
        return redirect(route('partner.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('cms.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
          // $partner_data = $request->validated();
        // if ($request->hasFile('image')){
        //   $pre_image = $slider->image;
        //   Storage::delete('public/images/partner/' . $pre_image);
        //   $image_path = $request->file('image')->store('public/images/slider');
        //   $image = basename($image_path);
        //   $partner_data['image'] = $image;
        // }
        // $partner->update($partner_data);
        // return redirect(route('cms.partner.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        $pre_image = $partner->image;
        Storage::delete('public/images/partners/' . $pre_image);
        $partner->delete();
        return back();
    }
}
