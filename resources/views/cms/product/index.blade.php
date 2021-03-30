@extends('cms.app')
@section('content')
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
                                    </div>
                                    <div>Medicine Table
                                        <div class="page-title-subheading">Choose between regular React Bootstrap tables or advanced dynamic ones.</div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <a href="{{route('product.create')}}" class="btn-shadow mr-3 btn btn-dark" data-toggle="tooltip" title="Add new Product" data-placement="bottom">
                                    <i class="fa fa-plus"></i>
                                    </a>
                                    <div class="d-inline-block dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Buttons
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-inbox"></i>
                                                        <span> Inbox</span>
                                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-book"></i>
                                                        <span> Book</span>
                                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link">
                                                        <i class="nav-link-icon lnr-picture"></i>
                                                        <span> Picture</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a disabled class="nav-link disabled">
                                                        <i class="nav-link-icon lnr-file-empty"></i>
                                                        <span> File Disabled</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>    </div>
                        </div>            <div class="main-card mb-3 card">
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>NUM</th>
                                        <th>Name</th>
                                        <th>Trade Name</th>
                                        <th>Coutry</th>
                                        <th>Company</th>
                                        <th>Type</th>
                                        <th>Expiry Date</th>
                                        <th>Detail</th>
                                        <th>Extra detail</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Image one</th>
                                        <th>Image two</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                   
                                    <tr>
                                        <td>{{$num++}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->trad_name}}</td>
                                        <td>{{$product->country}}</td>
                                        <td>{{$product->company}}</td>
                                        <td>{{$product->category->category_name}}</td>
                                        <td>{{$product->date}}</td>
                                        <td>{{$product->detail}}</td>
                                        <td>{{$product->extra_detail}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td><img class="shadow" width="100px" height="100px"  src="{{asset('storage/images/products/' . $product->image1)}}" alt=""></td>
                                        <td><img class="shadow" width="100px" height="100px" src="{{asset('storage/images/products/' . $product->image2)}}" alt=""></td>
                                        <td>
                                            <a href="{{route('product.edit', $product)}}" type="button"
                                                class="btn-shadow mb-2  btn btn-dark" data-toggle="tooltip" data-placement="bottom"
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
                                            <a href="{{route('product.show', $product)}}" type="button"
                                                class="btn-shadow mb-2 btn shadow btn-success" data-toggle="tooltip" data-placement="bottom"
                                                title="" data-original-title="view">
                                                <i class="fa fa-eye btn-icon-wrapper"> </i>
                                            </a>
                                        </td>
                                        
                                        
                                    </tr>
                               
                                @endforeach
                                    </tbody>
                                   
                                </table>
                            </div>
                     
@endsection