@extends('layouts.admin')
@section('title') All Forums @endsection

@section('content')
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h3 class="over-title margin-bottom-15 text-center">All <span class="text-bold">Forums</span></h3>
            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover" id="sample-table-2">
                            <thead>
                                <tr>
                                    <th class="center">Forum title</th>
                                    <th>Forum body</th>
                                    <th class="hidden-xs">Written By</th>
                                    <th class="hidden-xs">Belongs to</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($forums as $forum)
                                <tr>
                                    <td class="center">{{$forum->title}}</td>
                                    <td>{{$forum->body}}</td>
                                    <td class="hidden-xs">{{$forum->user->name}}</td>
                                    <td class="hidden-xs">{{$forum->category->cat_name}}</td>
                                    <td class="justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                <form method="POST" action="#" class="d-inline">
                                                    <input type="submit" class="btn btn-danger m-1" value="Delete">
                                                </form>
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