<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // dd($products->first()->category);
        $num=1;
        return view('cms.product.index', compact(['products','num']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $categories = Category::all();
        return view('cms.product.create',compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partner = ["name" => $request->name,"trad_name" => $request->trad_name,"country"=>$request->country,
    "category_id"=>$request->type,"detail"=>$request->detail,"date"=>$request->expiry_date,"price"=>$request->price,
        "stock" =>$request->stock,"company"=>$request->company,"extra_detail"=>$request->extra_detail];
        $imagePath1 = $request->file('image1')->store('public/images/products');
        $image1 = basename($imagePath1);
        $partner["image1"] = $image1;
        $imagePath2 = $request->file('image2')->store('public/images/products');
        $image2 = basename($imagePath2);
        $partner["image2"] = $image2;
        Product::create($partner);
        return redirect(route('product.index'));
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('cms.product.single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $pre_image = $product->image1;
        Storage::delete('public/images/products/' . $pre_image);
        $pre_image1 = $product->image2;
        Storage::delete('public/images/products/' . $pre_image1);
         $product->delete();
        return back(); 

     
    }
    
}
