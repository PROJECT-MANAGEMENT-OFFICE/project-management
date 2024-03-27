@extends('layouts.master')
@section('tittle','Add Data Roles')
@section('content') 
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <div class="navbar-nav align-items-center ms-auto">
            <a href="#" class="nav-link" >
                <i class=""></i>
                <span class="d-none d-lg-inline-flex"></span >
            </a>
    </div>
</nav>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-8">
    <div class="bg-secondary rounded h-100 p-3">
        <h2 class="mb-4 text-white">Roles</h2>
        <form action="/user/save" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label text-white">Name</label>
                <input type="text" name="name" id="" class="form-control mb-3 text-white" placeholder="name" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label text-white">Username</label>
                <input type="text" name="username" id="" class="form-control mb-3 text-white" placeholder="username" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label text-white">Password</label>
                <input type="password" name="password" id="" class="form-control mb-3 text-white " placeholder="password" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label text-white">Roles</label>
                <select name="roles" class="form-select form-select-sm mb-3 text-white" aria-label=".form-select-sm example">
                    <option value="superadmin">Superadmin</option>
                    <option value="projectManager">Project Manager</option>
                    <option value="guest">Guest</option>
                    <option value="adminInitiating">Admin Initiating</option>
                    <option value="adminPlanning">Admin Planning</option>
                    <option value="adminExecuting">Admin Executing</option>
                    <option value="adminControlMonitoring">Admin Control and Monitoring</option>
                </select>
            </div>
                <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
                <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
        </form>
    </div>
</div>

@endsection