@extends('cms.app')
@section('title', 'Create a Products')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Medicine</h5>
        <form id="signupForm" method="post" action="{{route('product.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Proudct Name</label>
                <div class="col-sm-10">
                    <input name="name" id="title" placeholder="Product Name" type="text" class="form-control" value="{{old('name')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('name')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="tname" class="col-sm-2 col-form-label">Trade Name</label>
                <div class="col-sm-10">
                    <input name="trad_name" id="tname" placeholder="Trade Name" type="text" class="form-control" value="{{old('trad_name')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('trade_name')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="country" class="col-sm-2 col-form-label">Coutry</label>
                <div class="col-sm-10">
                    <input name="country" id="country" placeholder="Country Name" type="text" class="form-control" value="{{old('country')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('country')}}</span>
                </div>
            </div>
            <div class="position-relative form-group">
           <label for="exampleCustomSelect" class="">Type</label>
           <select type="select" id="exampleCustomSelect" name="type" class="custom-select">
                 <option value="">Select Product Type</option>
                 @foreach($categories as $category)
                 <option value="{{$category->id}}">{{$category->category_name}}</option>
                    @endforeach
              </select>
            </div>
          <div class="position-relative row form-group">
                <label for="date" class="col-sm-2 col-form-label">Expiry Date</label>
                <div class="col-sm-10">
                    <input name="expiry_date" id="date" placeholder="Product's expiry date" type="date" class="form-control" value="{{old('expiry_date')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('expiry_date')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="company" class="col-sm-2 col-form-label">Company</label>
                <div class="col-sm-10">
                    <input name="company" id="company" placeholder="Company name" type="text" class="form-control" value="{{old('company')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('company')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="detail" class="col-sm-2 col-form-label">Detail</label>
                <div class="col-sm-10">
                    <textarea name="detail" id="detail" class="form-control tiny" required>{{old('detail')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('detail')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="exdetail" class="col-sm-2 col-form-label">Extra Detail</label>
                <div class="col-sm-10">
                    <textarea name="extra_detail" id="exdetail" class="form-control tiny" required>{{old('extra_detail')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('extra_detail')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="image1" class="col-sm-2 col-form-label">Image 1</label>
                <div class="col-sm-10">
                    <input name="image1" id="image1" type="file" class="form-control-file form-control" required>
                    <span class="text-danger text-italic">{{$errors->first('image')}}</span>
                    <small class="form-text text-muted">The width and height of the image must be taken into account.
                    </small>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="image" class="col-sm-2 col-form-label">Image 2</label>
                <div class="col-sm-10">
                    <input name="image2" id="image2" type="file" class="form-control-file form-control" required>
                    <span class="text-danger text-italic">{{$errors->first('image')}}</span>
                    <small class="form-text text-muted">The width and height of the image must be taken into account.
                    </small>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="company" class="col-sm-2 col-form-label">Price in AFN</label>
                <div class="col-sm-10">
                    <input name="price" id="company" placeholder="price" type="number" class="form-control" value="{{old('price')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('price')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input name="stock" id="stock" placeholder="Stock" type="number" class="form-control" value="{{old('stock')}}"  maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('stock')}}</span>
                </div>
            </div>
            <div class="position-relative row form-check">
                <div class="col-sm-10 offset-sm-2 pl-0">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection