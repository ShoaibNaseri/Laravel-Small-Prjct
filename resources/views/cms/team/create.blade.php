@extends('cms.app')
@section('title', 'Create a Slider')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Team Members Form</h5>
        <form id="" method="post" action="{{route('team.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input name="name" id="title_en" placeholder="Member Name" type="text" class="form-control" value="{{old('name')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('name')}}</span>
                </div>
            </div>
           
            <div class="position-relative row form-group">
                <label for="tittle" class="col-sm-2 col-form-label">Position</label>
                <div class="col-sm-10">
                    <input name="position" id="title" placeholder="Position in Company" type="text" class="form-control" value="{{old('position')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('position')}}</span>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="facebook" class="col-sm-2 col-form-label">Facebook Link</label>
                <div class="col-sm-10">
                    <input name="facebook" id="facebook" placeholder="Position in Company" type="text" class="form-control" value="{{old('facebook')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('facebook')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="instagram" class="col-sm-2 col-form-label">Instagram Link</label>
                <div class="col-sm-10">
                    <input name="instagram" id="instagram" placeholder="Position in Company" type="text" class="form-control" value="{{old('instagram')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('instagram')}}</span>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="twitter" class="col-sm-2 col-form-label">Twitter Link</label>
                <div class="col-sm-10">
                    <input name="twitter" id="twitter" placeholder="Position in Company" type="text" class="form-control" value="{{old('twitter')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('twitter')}}</span>
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