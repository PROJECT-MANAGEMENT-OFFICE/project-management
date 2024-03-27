@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px;">
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <center>
    <div class="navbar-nav align-items-center ms-auto">
            <a href="/planning" class="nav-link">
                <i class="fa fa-home"></i>
                <span class="d-none d-lg-inline-flex"></span>
            </a>
            <a href="/scope" class="nav-link" >
                <i class="fas fa-crosshairs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Scope</span >
            </a>
            <a href="/schedule" class="nav-link">
                <i class="far fa-calendar-alt me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Schedule</span>
            </a>
            <a href="/cost" class="nav-link">
                <i class="	fas fa-coins me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Cost</span>
            </a>
            <a href="/quality" class="nav-link">
                <i class="fas fa-award me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Quality</span>
            </a>
            <a href="/resources" class="nav-link">
                <i class="fa fa-cogs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Resources</span>
            </a>
            <a href="/communication" class="nav-link">
                <i class="far fa-comments me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Communication</span>
            </a>
            <a href="/risk" class="nav-link">
                <i class="fa fa-cog me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Risk</span>
            </a>
            <a href="/procurement" class="nav-link">
                <i class="fas fa-shopping-cart me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Procurement</span>
            </a>
            <a href="/stakeholder" class="nav-link">
                <i class="fas fa-users-cog me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Stakeholder</span>
            </a> 
    </div>
    </center>
</nav>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-10">
    <div class="bg-secondary rounded h-100 p-4">
        <h2 class="mb-4">Resources Plan</h2>
        <form action="/resource/{{ $resource->id }}/update" method="post">
            @csrf
        <div class="row mb-2">
            <div class="col-md-8">
                <label for="" class="form-label text-white">Name</label>
                <input type="text" name="name" id="" value="{{$resource->name}}" class="form-control mb-3 text-white"  required>
            </div>   
            <div class="col-md-4">
                <label for="" class="form-label text-white">Position</label>
                <select name="position" id="" class="form-select mb-3 text-white" required>
                    <option value="project_director">Project Director</option>
                    <option value="project_sponsor">Project Sponsor</option>
                    <option value="project_manager">Project Mananger</option>
                    <option value="chief_engineer">Chief Engineer</option>
                    <option value="engineer">Engineer</option>
                    <option value="project_control">Project Control</option>
                    <option value="project_admin">Project Admin</option>
                </select>
            </div> 
        </div>   
        <div class="row mb-2">
            <div class="col-md-8">
                <label for="" class="form-label text-white">Duration</label>
                <input type="number" name="duration" id="" value="{{$resource->duration}}" class="form-control mb-3 text-white"  required>
            </div>   
            <div class="col-md-4">
                <label for="" class="form-label text-white">Status</label>
                <select name="status" id="" class="form-select mb-3 text-white" required>
                    <option value="Technical">KARTAP</option>
                    <option value="Perfomance">KWT</option>
                </select>
            </div> 
        </div>   
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
        </form>
    </div>
</div>
@endsection
