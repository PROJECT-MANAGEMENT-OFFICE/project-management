@extends('layouts.master')
@section('tittle','Roles')
@section('content')   
<style>
    .table-responsive table {
        overflow-x: scroll;
    }

    .table-striped td, .table-striped th {
        white-space: nowrap;
    }
</style>
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px;">
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <center>
    <div class="navbar-nav align-items-center ms-auto">
        <a href="/initiating" class="nav-link">
            <i class="fa fa-home"></i>
            <span class="d-none d-lg-inline-flex"></span>
        </a>
        <a href="/projectCharter" class="nav-link">
            <i class="far fa-clipboard"></i>
            <span class="d-none d-lg-inline-flex">project Charter</span>
        </a>
        <a href="/projectDefinition" class="nav-link">
            <i class="far fa-clipboard"></i>
            <span class="d-none d-lg-inline-flex">project Definition</span>
        </a>
    </div>
    </center>
</nav>

<div class="container-fluid pt-4 px-4">
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Project Definition</h2>
                <a href="/projectDefinition/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr class="text-white">
                                <th valign="top"><small>Name Project</small></th>
                                <th valign="top"><small>Code Project</small></th>
                                <th valign="top"><small>Contract Value</small></th>
                                <th valign="top"><small>Business Line</small></th>
                                <th valign="top"><small>Date</small></th>
                                <th valign="top"><small>Status</small></th>
                                <th valign="top"><small>Source of Funds</small></th>
                                <th valign="top"><small>Business Schema</small></th>
                                <th valign="top"><small>Contract Duration</small></th>
                                <th valign="top"><small>Warranty Period</small></th>
                                <th valign="top"><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectDefinition as $u)
                            <tr class="text-white">
                                <td><small>{{$u->name_project}}</small></td>
                                <td><small>{{$u->code_project}}</small></td>
                                <td><small>{{$u->contract_value}}</small></td>
                                <td><small>{{$u->bussines_line}}</small></td>
                                <td><small>{{$u->date}}</small></td>
                                <td><small>{{$u->status}}</small></td>
                                <td><small>{{$u->source_ofFunds}}</small></td>
                                <td><small>{{$u->schema_bussines}}</small></td>
                                <td><small>{{$u->contract_duration}}</small></td>
                                <td><small>{{$u->warranty_period}}</small></td>
                                <td><small>
                                    <a href="/projectDefinition/{{$u->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>   
                                    <a href="/projectDefinition/{{$u->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                                </small></td>
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


