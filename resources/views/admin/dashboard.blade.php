@extends('layouts.admin')
@section('title') Dashboard | @endsection
    
@section('content')
<div class="main-content" >
    <div class="wrap-content container" id="container">
        <!-- start: DASHBOARD TITLE -->
        <section id="page-title" class="padding-top-15 padding-bottom-15">
            <div class="row">
                <div class="col-sm-7">
                    <h1 class="mainTitle">Dashboard</h1>
                    <span class="mainDescription">overview &amp; stats </span>
                </div>
            </div>
        </section>
        <!-- end: DASHBOARD TITLE -->

        <!-- start: FEATURED BOX LINKS -->
        <div class="container-fluid container-fullw bg-white">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body">
                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fas fa-grin-alt fa-stack-1x fa-inverse"></i> </span>
                            <h2 class="StepTitle">Total Users</h2>
                            <p class="text-small">
                                10 Users
                            </p>
                            <p class="links cl-effect-1">
                                <a href="Table.html">
                                    view more
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body">
                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                            <h2 class="StepTitle">Total Forums</h2>
                            <p class="text-small">
                                10 Forums
                            </p>
                            <p class="cl-effect-1">
                                <a href="TableForum.html">
                                    view more
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-white no-radius text-center">
                        <div class="panel-body">
                            <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
                            <h2 class="StepTitle">Total Categories</h2>
                            <p class="text-small">
                                10 Categories
                            </p>
                            <p class="links cl-effect-1">
                                <a href="CatTable.html">
                                    view more
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: FEATURED BOX LINKS -->
    </div>
</div>
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{{URL::asset('AdminPanel/vendor/Chart.js/Chart.min.js')}}"></script>
		<script src="{{URL::asset('AdminPanel/vendor/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="{{URL::asset('AdminPanel/assets/js/main.js')}}"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="{{URL::asset('AdminPanel/assets/js/index.js')}}"></script>
@endsection
