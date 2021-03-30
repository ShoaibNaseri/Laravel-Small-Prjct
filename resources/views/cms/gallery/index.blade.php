@extends('cms.app')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-database icon-gradient bg-ripe-malin"></i>
            </div>
            <div>Gallery
                <div class="page-title-subheading">This page displays all the pictures.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
              <a href="{{route('partner.create')}}">
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
    @foreach($images as $image)
   <div class="col-md-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{$partner->name}}</h5>
                <p class="small">{{$partner->webpage_link}}</p>
                <img class="card-img-bottom" src="{{asset('storage/images/partners/' . $image->image)}}" alt="company Image">
            </div>
            <div class="d-block text-right card-footer">
                <form class="d-inline" action="{{route('partner.destroy', $partner)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button data-type="question" type="submit"
                        class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Delete"
                        onclick="return confirm('Are you sure you want to delete this post?');">
                        <i class="fa fa-trash btn-icon-wrapper"> </i>
                    </button>
                </form>

                <a href="{{route('partner.edit', $partner)}}" type="button"
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