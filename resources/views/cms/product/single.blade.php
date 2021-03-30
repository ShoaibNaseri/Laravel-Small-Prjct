@extends('cms.app')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-magic-wand icon-gradient bg-mixed-hopes"></i>
            </div>
            <div>Product
                <div class="page-title-subheading">This page displays single the Product.</div>
            </div>
        </div>
       
    </div>
</div>

<div class="card">
    <div class=" row p-5">
        <div class="col-md-6">
           <img class="shadow" width="400px" height="350px" src="{{asset('storage/images/products/' . $product->image1)}}" alt="">
        </div>
        <div class="col-md-4">
           <img class="shadow" width="400px" height="350px" class="gorup"  src="{{asset('storage/images/products/' . $product->image2)}}" alt=""> 
        </div>
       
    </div>
     <div class="row pl-5">
        <div class="col-md-10">
        <h1 class="text-primary">{{$product->name}}</h1>
            <hr class="driver"></hr>
        </div>
    </div>
   <div class="row pl-5 pb-5">
  
        <div class="col-md-8">
            
            <h5 class=""> Trade Name: <span class="text-dark"> {{$product->trad_name}} </span> </h5>
            <h5 class=""> Company Name:  <span class="text-warning">{{$product->company}}</span></h5>
           
            <h5 class="">Details:</h5>
            <p>{{$product->detail}}</p>
            <h5 class="]">Extra Details:</h5>
            <p class="pb-3">{{$product->extra_detail}}</p>
            <hr class="driver"></hr>
            <a href="{{route('product.edit', $product)}}" type="button"
                                                class="btn-shadow mb-2   btn btn-dark" data-toggle="tooltip" data-placement="bottom"
                                                title="" data-original-title="Edit">
                                                <i class="fa fa-edit btn-icon-wrapper"> </i>
                                            </a>
                                            <form class="d-inline" action="{{route('product.destroy', $product)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button data-type="question" type="submit"
                                                        class="btn-shadow mb-2 btn shadow btn-warning" data-toggle="tooltip"
                                                        data-placement="bottom" title="" data-original-title="Delete"
                                                        onclick="return confirm('Are you sure you want to delete this post?');">
                                                        <i class="fa fa-trash btn-icon-wrapper"> </i>
                                                    </button>
                                                </form>
        </div>
        <div class="col-md-4">
            <h5 class="text-warning">Expiry Date: {{$product->date}}</h5>
            <h5>Stock: {{$product->stock}}</h5>
            <h5>Price: {{$product->price}}</h5>
            <h5>Type: {{$product->type}}</h5>
        </div>

   </div>
</div>
   
  
@endsection