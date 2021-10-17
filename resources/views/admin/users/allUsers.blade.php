@extends('layouts.admin')
@section('title') All Users @endsection

@section('content')
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h3 class="over-title margin-bottom-15 text-center">All <span class="text-bold">Users</span></h3>
            <div class="alert alert-info">
                <a href="" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> Add New User
                </a>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover" id="sample-table-2">
                            <thead>
                                <tr>
                                    <th class="center">Photo</th>
                                    <th>Full Name</th>
                                    <th class="hidden-xs">Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td class="center">
                                        <img src="{{URL::asset('AdminPanel/assets/images/avatar-1.jpg')}}" class="img-rounded" alt="image">
                                        </td>
                                    <td>{{$user->name}}</td>
                                    <td class="hidden-xs">
                                        <a href="#" rel="nofollow" target="_blank">
                                            {{$user->email}}
                                        </a>    
                                    </td>
                                    <td class="center">
                                        <div>
                                            <a href="#" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="#" class="btn btn-transparent btn-xs tooltips"  tooltip-placement="top" tooltip="Share">
                                                <i class="fa fa-share"></i>
                                            </a>
                                            <a href="#" class="btn btn-transparent btn-xs tooltips"
                                                tooltip-placement="top" tooltip="Remove">
                                                <i class="fa fa-times"></i>
                                            </a>
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

    @endsection
