@extends('cms.app')
@section('title', 'Shoaib | Posts')
@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit"></i>
            </div>
            <div>Posts
                <div class="page-title-subheading">This page displays all the posts.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
              <a href="{{route('post.create')}}">
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
    @foreach($posts as $post)
    <div class="col-md-4">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <img class="card-img-bottom" src="{{asset('storage/cms/uploaded/' . $post->image)}}" alt="post image">
            </div>
            <div class="d-block text-right card-footer">
                <form class="d-inline" action="{{route('post.destroy', $post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button data-type="question" type="submit"
                        class="mr-2 btn-icon btn-icon-only btn btn-outline-danger" data-toggle="tooltip"
                        data-placement="bottom" title="" data-original-title="Delete"
                        onclick="return confirm('Are you sure you want to delete this post?');">
                        <i class="fa fa-trash btn-icon-wrapper"> </i>
                    </button>
                </form>

                <a href="{{route('post.edit', $post)}}" type="button"
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
