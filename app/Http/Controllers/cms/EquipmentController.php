<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Equipment::all();
        $num=1;
        return view('cms.medical_equipment.index',compact(['products','num']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.medical_equipment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = ["name" => $request->name,"trad_name" => $request->trad_name,"country"=>$request->country,
        "detail"=>$request->detail,"date"=>$request->expiry_date,"price"=>$request->price,
            "stock" =>$request->stock,"company"=>$request->company,"extra_detail"=>$request->extra_detail];
            $imagePath1 = $request->file('image1')->store('public/images/equipments');
            $image1 = basename($imagePath1);
            $product["image1"] = $image1;
            $imagePath2 = $request->file('image2')->store('public/images/equipments');
            $image2 = basename($imagePath2);
            $product["image2"] = $image2;
            Equipment::create($product);
            return redirect(route('equipment.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function show(Equipment $equipment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipment $equipment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipment $equipment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipment  $equipment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipment $equipment)
    {
        //
        $pre_image = $equipment->image1;
        $pre_image2 = $equipment->image2;
        Storage::delete('public/images/equipments/' . $pre_image);
        Storage::delete('public/images/equipments/' . $pre_image2);
        $equipment->delete();
        return back();
    }
}
