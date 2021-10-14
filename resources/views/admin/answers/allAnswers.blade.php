@extends('layouts.admin')
@section('title') All Asnwers @endsection

@section('content')
<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <h3 class="over-title margin-bottom-15 text-center">All <span class="text-bold">Answers</span></h3>
            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover" id="sample-table-2">
                            <thead>
                                <tr>
                                    <th class="center">Related Forum</th>
                                    <th class="hidden-xs">Written By</th>
                                    <th class="hidden-xs">Status</th>
                                    <th>Rate</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="center">Forum body...</td>
                                    <td class="hidden-xs">User</td>
                                    <td class="hidden-xs">Not marked</td>
                                    <td>2</td>
                                    <td class="justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">Forum body...</td>
                                    <td class="hidden-xs">User</td>
                                    <td class="hidden-xs">Not marked</td>
                                    <td>2</td>
                                    <td class="justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">Forum body...</td>
                                    <td class="hidden-xs">User</td>
                                    <td class="hidden-xs">Not marked</td>
                                    <td>2</td>
                                    <td class="justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="center">Forum body...</td>
                                    <td class="hidden-xs">User</td>
                                    <td class="hidden-xs">Not marked</td>
                                    <td>2</td>
                                    <td class="justify-content-center">
                                        <div class="visible-md visible-lg hidden-sm hidden-xs">
                                            <a href="EditUser.html" class="btn btn-transparent btn-xs btn-warning mx-1" tooltip-placement="top" tooltip="Edit">Edit</a>
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
@endsection