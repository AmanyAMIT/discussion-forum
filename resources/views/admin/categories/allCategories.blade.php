@extends('layouts.admin')
@section('title') All Categories @endsection

@section('content')
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h3 class="over-title margin-bottom-15 text-center">All <span class="text-bold">Categories</span></h3>
            <div class="alert alert-info">
                <a href="{{route('categories.create')}}" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add New Category</a>
            </div>
            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover" id="sample-table-2">
                            <thead>
                                <tr>
                                    <th class="center">Category Name</th>
                                    <th>Version Number</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->cat_name}}</td>
                                    <td class="hidden-xs">{{$category->version_no}}</td>
                                    <td>
                                        <div class="d-flex hidden-sm hidden-xs">
                                            <a href="{{route('categories.edit' , $category->id)}}" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                            <form method="POST" action="{{route('categories.destroy' , $category->id)}}">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <input type="submit" class="btn btn-danger m-1" value="Delete">
                                            </form> 
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection