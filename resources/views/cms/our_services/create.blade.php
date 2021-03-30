@extends('cms.app')
@section('title', 'Create a Slider')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Services Form</h5>
        <form id="" method="post" action="{{route('service.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" id="title_en" placeholder="Service Title" type="text" class="form-control" value="{{old('title')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('title')}}</span>
                </div>
            </div>
           
         
            
            <div class="position-relative row form-group">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" placeholder="Description" class="form-control tiny" required>{{old('description')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('description')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="extra_description" class="col-sm-2 col-form-label">extra Description</label>
                <div class="col-sm-10">
                    <textarea name="extra_description" id="description" placeholder="Extra Description" class="form-control tiny" required>{{old('description')}}</textarea>
                    <span class="text-danger text-italic">{{$errors->first('extra_description')}}</span>
                </div>
            </div>
            
            <div class="position-relative row form-group">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input name="image" id="image" type="file" class="form-control-file form-control" required>
                    <span class="text-danger text-italic">{{$errors->first('image')}}</span>
                    <small class="form-text text-muted">The width and height of the image must be taken into account.
                    </small>
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