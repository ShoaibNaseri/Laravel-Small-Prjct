@extends('cms.app')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="lnr-magic-wand icon-gradient bg-mixed-hopes"></i>
            </div>
            <div>Sliders
                <div class="page-title-subheading">This page displays all the slides.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
              <a href="{{route('contact.create')}}">
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
    @foreach($contacts as $contact)
   <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class=""><span class="fa fa-envelope "> Email:</span> {{$contact->email}}</h5>
                <h5 class=""><span class="fa fa-phone "> Phone:</span> {{$contact->phone}}</h5>
                <h5 class=""><span class="fa fa-address-book"> Adress:</span> {{$contact->adress}}</h5>
                
            </div>
            <div class="d-block text-right card-footer">
                <form class="d-inline" action="{{route('contact.destroy', $contact)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button data-type="question" type="submit"
                        class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Delete"
                        onclick="return confirm('Are you sure you want to delete this post?');">
                        <i class="fa fa-trash btn-icon-wrapper"> </i>
                    </button>
                </form>

                <a href="{{route('contact.edit', $contact)}}" type="button"
                    class="btn btn-icon btn-icon-only btn-outline-success" data-toggle="tooltip" data-placement="bottom"
                    title="" data-original-title="Edit">
                    <i class="fa fa-edit btn-icon-wrapper"> </i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection