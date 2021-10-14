@extends('layouts.admin')
@section('title') User Profile @endsection

@section('content')
<div id="app">
    <div class="app-content">
        <div class="main-content" >
            <div class="wrap-content container" id="container">
                <!-- start: PAGE TITLE -->
                <section id="page-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h1 class="mainTitle">User Profile</h1>
                            <span class="mainDescription">There are many systems which have a need for user profile pages which display personal information on each member.</span>
                        </div>
                    </div>
                </section>
                <!-- end: PAGE TITLE -->
                <!-- start: USER PROFILE -->
                <div class="container-fluid container-fullw bg-white">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tabbable">
                                <ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">
                                    <li class="active">
                                        <a data-toggle="tab" href="#panel_overview">
                                            Overview
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#panel_edit_account">
                                            Forums you created
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#panel_projects">
                                            Your "Best Answers"
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="panel_overview" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-sm-5 col-md-4">
                                                <div class="user-left">
                                                    <div class="center">
                                                        <h4>Peter Clark</h4>
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="user-image">
                                                                <div class="fileinput-new thumbnail"><img src="assets/images/avatar-1-xl.jpg" alt="">
                                                                </div>
                                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                                <div class="user-image-buttons">
                                                                    <span class="btn btn-azure btn-file btn-sm"><span class="fileinput-new"><i class="fa fa-pencil"></i></span><span class="fileinput-exists"><i class="fa fa-pencil"></i></span>
                                                                        <input type="file">
                                                                    </span>
                                                                    <a href="#" class="btn fileinput-exists btn-red btn-sm" data-dismiss="fileinput">
                                                                        <i class="fa fa-times"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="social-icons block">
                                                            <ul>
                                                                <li data-placement="top" data-original-title="Twitter" class="social-twitter tooltips">
                                                                    <a href="http://www.twitter.com" target="_blank">
                                                                        Twitter
                                                                    </a>
                                                                </li>
                                                                <li data-placement="top" data-original-title="Facebook" class="social-facebook tooltips">
                                                                    <a href="http://facebook.com" target="_blank">
                                                                        Facebook
                                                                    </a>
                                                                </li>
                                                                <li data-placement="top" data-original-title="Google" class="social-google tooltips">
                                                                    <a href="http://google.com" target="_blank">
                                                                        Google+
                                                                    </a>
                                                                </li>
                                                                <li data-placement="top" data-original-title="LinkedIn" class="social-linkedin tooltips">
                                                                    <a href="http://linkedin.com" target="_blank">
                                                                        LinkedIn
                                                                    </a>
                                                                </li>
                                                                <li data-placement="top" data-original-title="Github" class="social-github tooltips">
                                                                    <a href="#" target="_blank">
                                                                        Github
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <table class="table table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="3">Contact Information</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>url</td>
                                                                <td>
                                                                <a href="#">
                                                                    www.example.com
                                                                </a></td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>email:</td>
                                                                <td>
                                                                <a href="">
                                                                    peter@example.com
                                                                </a></td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>phone:</td>
                                                                <td>(641)-734-4763</td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>skye</td>
                                                                <td>
                                                                <a href="">
                                                                    peterclark82
                                                                </a></td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="3">General information</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Position</td>
                                                                <td>UI Designer</td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Last Logged In</td>
                                                                <td>56 min</td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Position</td>
                                                                <td>Senior Marketing Manager</td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Supervisor</td>
                                                                <td>
                                                                <a href="#">
                                                                    Kenneth Ross
                                                                </a></td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status</td>
                                                                <td><span class="label label-sm label-info">Administrator</span></td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="3">Additional information</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Birth</td>
                                                                <td>21 October 1982</td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Groups</td>
                                                                <td>New company web site development, HR Management</td>
                                                                <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-sm-7 col-md-8">
                                                <div class="row space20">
    
                                                </div>
                                                <div class="panel panel-white" id="activities">
                                                    <div class="panel-heading border-light">
                                                        <h4 class="panel-title text-primary">Recent Activities</h4>
                                                        <paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>
                                                    </div>
                                                    <div collapse="activities" ng-init="activities=false" class="panel-wrapper">
                                                        <div class="panel-body">
                                                            <!-- Some Activities Here... -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="panel_edit_account" class="tab-pane fade">
                                        <table class="table" id="projects">
                                            <thead>
                                                <tr>
                                                    <th>Forum Title</th>
                                                    <th class="hidden-xs">Forum Body</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Some Title</td>
                                                    <td class="hidden-xs">Some Body</td>
                                                </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="panel_projects" class="tab-pane fade">
                                        <table class="table" id="projects">
                                            <thead>
                                                <tr>
                                                    <th>Forum Title</th>
                                                    <th class="hidden-xs">Your Answer</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Some Title</td>
                                                    <td class="hidden-xs">Answer</td>
                                                </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: USER PROFILE -->
            </div>
        </div>
    </div>
</div>

@endsection