@extends('cms.app')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-magic-wand icon-gradient bg-mixed-hopes"></i>
            </div>
            <div>Medicine Amount Type
                <div class="page-title-subheading">This page displays all Amount Types.</div>
             
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
              <a href="{{route('amount.create')}}">
                <button type="button" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-plus"></i>
                    </span>
                    Add
                </button>
              </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    @foreach($amounts as $amount)
   <div class="col-md-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{$num++}}.{{$amount->amount_type}}</h5>
            </div>
            <div class="d-block text-right card-footer">
                <form class="d-inline" action="{{route('amount.destroy', $amount)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button data-type="question" type="submit"
                        class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Delete"
                        onclick="return confirm('Are you sure you want to delete this post?');">
                        <i class="fa fa-trash btn-icon-wrapper"> </i>
                    </button>
                </form>

                <a href="{{route('amount.edit', $amount)}}" type="button"
                    class="btn btn-icon btn-icon-only btn-outline-success" data-toggle="tooltip" data-placement="bottom"
                    title="" data-original-title="Edit">
                    <i class="fa fa-edit btn-icon-wrapper"> </i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
   
</div>
<div class="row p-4 ">
        <div class="col-md-12 text-center"><p class="small text-danger">We have {{$num-1}} type Amount</p></div>
    </div>
@endsection