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
                            <form action="#" role="form" id="form2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Picture <span class="symbol required"></span>
                                            </label>
                                            <input type="file" placeholder="" class="form-control" id="firstname2" name="firstname2">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Username <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert your First Name" class="form-control" id="firstname2" name="firstname2">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Email <span class="symbol required"></span>
                                            </label>
                                            <input type="email" placeholder="Insert your Last Name" class="form-control" id="lastname2" name="lastname2">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Password <span class="symbol required"></span>
                                            </label>
                                            <input type="password" placeholder="Text Field" class="form-control" id="email2" name="email2">
                                        </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">
                                                Roles <em>(select at most one)</em> <span class="symbol required"></span>
                                            </label>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="radio" value="" name="services" id="service1">
                                                <label for="service1">
                                                    Role 1
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="radio" value="" name="services" id="service2">
                                                <label for="service2">
                                                    Role 2
                                                </label>
                                            </div>
                                            <div class="checkbox clip-check check-primary">
                                                <input type="radio" value="" name="services" id="service3">
                                                <label for="service3">
                                                    Role 3
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            By clicking REGISTER, you are agreeing to add this user to your community
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                                            Register <i class="fa fa-arrow-circle-right"></i>
                                        </button>
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