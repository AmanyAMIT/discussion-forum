@extends('layouts.admin')
@section('title') All Users @endsection

@section('content')
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h3 class="over-title margin-bottom-15 text-center">All <span class="text-bold">Users</span></h3>
            <div class="alert alert-info">
                <a href="AddUser.html" class="btn btn-primary"><i class="fas fa-user-plus"></i> Add New User</a>
            </div>
            <div class="container-fluid container-fullw">
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
                                <tr>
                                    <td class="center"><img src="assets/images/avatar-1.jpg" class="img-rounded" alt="image"></td>
                                    <td>Peter Clark</td>
                                    <td class="hidden-xs">
                                    <a href="#" rel="nofollow" target="_blank">
                                        peter@example.com
                                    </a></td>
                                    <td class="center justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="UserProfile.html" class="btn btn-transparent btn-xs tooltips btn-info mx-1" tooltip-placement="top" tooltip="Share">Show</a>
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                                <form method="POST" action="#" class="d-inline">
                                                    <input type="submit" class="btn btn-danger m-1" value="Delete">
                                                </form>
                                            </td>
                                </tr>
                                <tr>
                                    <td class="center"><img src="assets/images/avatar-2.jpg" class="img-rounded" alt="image"></td>
                                    <td>Nicole Bell</td>
                                    <td class="hidden-xs">
                                    <a href="#" rel="nofollow" target="_blank">
                                        nicole@example.com
                                    </a></td>
                                    <td class="center justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="UserProfile.html" class="btn btn-transparent btn-xs tooltips btn-info mx-1" tooltip-placement="top" tooltip="Share">Show</a>
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                                <form method="POST" action="#" class="d-inline">
                                                    <input type="submit" class="btn btn-danger m-1" value="Delete">
                                                </form>
                                            </td>
                                </tr>
                                <tr>
                                    <td class="center"><img src="assets/images/avatar-3.jpg" class="img-rounded" alt="image"></td>
                                    <td>Steven Thompson</td>
                                    <td class="hidden-xs">
                                    <a href="#" rel="nofollow" target="_blank">
                                        steven@example.com
                                    </a></td>
                                    <td class="center justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="UserProfile.html" class="btn btn-transparent btn-xs tooltips btn-info mx-1" tooltip-placement="top" tooltip="Share">Show</a>
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                                <form method="POST" action="#" class="d-inline">
                                                    <input type="submit" class="btn btn-danger m-1" value="Delete">
                                                </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center"><img src="assets/images/avatar-4.jpg" class="img-rounded" alt="image"></td>
                                    <td>Ella Patterson</td>
                                    <td class="hidden-xs">
                                    <a href="#" rel="nofollow" target="_blank">
                                        ella@example.com
                                    </a></td>
                                    <td class="center justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="UserProfile.html" class="btn btn-transparent btn-xs tooltips btn-info mx-1" tooltip-placement="top" tooltip="Share">Show</a>
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                                <form method="POST" action="#" class="d-inline">
                                                    <input type="submit" class="btn btn-danger m-1" value="Delete">
                                                </form>
                                            </td>
                                        </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection