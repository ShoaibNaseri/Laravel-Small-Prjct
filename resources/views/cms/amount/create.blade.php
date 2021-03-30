@extends('cms.app')
@section('title', 'Insert Amount Type')
@section('content')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Insert New Medicine Type</h5>
        <form id="" method="post" action="{{route('amount.store')}}" enctype="multipart/form-data" novalidate="novalidate">
        @csrf
            <div class="position-relative row form-group">
                <label for="title_en" class="col-sm-2 col-form-label">Amount Type Name</label>
                <div class="col-sm-10">
                    <input name="amount_type" id="title_en" placeholder="Amount Type" type="text" class="form-control" value="{{old('amount_type')}}" required maxlength="191">
                    <span class="text-danger text-italic">{{$errors->first('amount_type')}}</span>
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