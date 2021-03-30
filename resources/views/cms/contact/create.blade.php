@extends('cms.app')
@section('title', 'Create a Parnter')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Contact info Form</h5>
        <form id="" method="post" action="{{route('contact.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="email" class="col-sm-2 col-form-label">Company email</label>
                <div class="col-sm-10">
                    <input name="email" id="email" placeholder="Company email" type="email" class="form-control" value="{{old('name')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('email')}}</span>
                </div>
            </div>
           
            <div class="position-relative row form-group">
                <label for="phone" class="col-sm-2 col-form-label">Company Phone Number</label>
                <div class="col-sm-10">
                    <input name="phone" id="phone" placeholder="Company Phone Number" type="text" class="form-control" value="{{old('phone')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('phone')}}</span>
                </div>
            </div>
            
            <div class="position-relative row form-group">
                <label for="adress" class="col-sm-2 col-form-label">Company Adress</label>
                <div class="col-sm-10">
                    <input name="adress" id="adress" placeholder="Company Adress" type="text" class="form-control" value="{{old('adress')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('adress')}}</span>
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