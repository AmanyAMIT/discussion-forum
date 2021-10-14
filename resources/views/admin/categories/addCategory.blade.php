@extends('layouts.admin')
@section('title') Add Category @endsection

@section('content')
<div id="app">
    <div class="app-content">
        <div class="main-content" >
            <div class="wrap-content containerb addform" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">Add Category</h1>
                            <span class="mainDescription">Please fill the fields below to add a new category</span>
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
                                                Category Name <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert your First Name" class="form-control" id="firstname2" name="firstname2">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Version Number <span class="symbol required"></span>
                                            </label>
                                            <input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname2" name="lastname2">
                                        </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            By clicking SUBMIT, you are agreeing to add this category to your client
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary btn-wide pull-right" type="submit">
                                            Submit <i class="fa fa-arrow-circle-right"></i>
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
@endsection