@extends('layouts.admin')
@section('title') Add Users @endsection

@section('content')
<div id="app">
    <div class="app-content">
        <div class="main-content" >
            <div class="wrap-content containerb addform" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">Add New User</h1>
                            <span class="mainDescription">Please fill the fields below to add user</span>
                        </div>
                    </div>
                </section>
                <!-- end: PAGE TITLE -->

                <!-- start: FORM VALIDATION EXAMPLE 2 -->
                <div class="container-fluid container-fullw">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                            <form method="POST" action="{{route('users.update' , $user->id)}}" role="form" id="form2" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <div class="form-group">
                                            <label class="control-label">
                                                Picture <span class="symbol required"></span>
                                            </label>
                                            <input type="file" placeholder="" class="form-control" id="firstname2" name="image">
                                            @error('image')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Username <span class="symbol required"></span>
                                            </label>
                                            <input type="text" class="form-control"
                                            value="{{$user->name}}"
                                            id="firstname2" name="name">
                                            @error('name')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Email <span class="symbol required"></span>
                                            </label>
                                            <input type="email" placeholder="Insert your Last Name" class="form-control"
                                            value="{{$user->email}}"
                                            id="lastname2" name="email">
                                            @error('email')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                        </div>
                                        <div class="form-group">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Roles <em>(select at most one)</em > <span class="symbol required"></span>
                                            </label>
                                            @foreach ($roles as $role)
                                            <div class="checkbox clip-check check-primary">
                                                <input type="radio" value="{{$role->id}}" name="role_id" id="service1">
                                                <label for="service1">
                                                    {{$role->role_name}}
                                                </label>
                                                @error('role_id')
                                        <small class="text-danger"> {{$message}} </small> 
                                        @enderror
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            By clicking UPDATE, you are agreeing to update this user's information
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" value="Update" class="btn btn-primary btn-wide pull-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end: FORM VALIDATION EXAMPLE 2 -->
            </div>
        </div>
    </div>
</div>
@endsection