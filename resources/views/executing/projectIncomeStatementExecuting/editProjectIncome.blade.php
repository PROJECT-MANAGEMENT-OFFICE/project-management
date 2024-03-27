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
            <a href="/planningExecuting" class="nav-link">
                <i class="fa fa-home"></i>
                <span class="d-none d-lg-inline-flex"></span>
            </a>
            <a href="/scopeExecuting" class="nav-link" >
                <i class="fas fa-crosshairs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Scope</span >
            </a>
            <a href="/scheduleExecuting" class="nav-link">
                <i class="far fa-calendar-alt me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Schedule</span>
            </a>
            <a href="/costExecuting" class="nav-link">
                <i class="	fas fa-coins me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Cost</span>
            </a>
            <a href="/qualityExecuting" class="nav-link">
                <i class="fas fa-award me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Quality</span>
            </a>
            <a href="/resourcesExecuting" class="nav-link">
                <i class="fa fa-cogs me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Resources</span>
            </a>
            <a href="/communicationExecuting" class="nav-link">
                <i class="far fa-comments me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Communication</span>
            </a>
            <a href="/riskExecuting" class="nav-link">
                <i class="fa fa-cog me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Risk</span>
            </a>
            <a href="/procurementExecuting" class="nav-link">
                <i class="fas fa-shopping-cart me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Procurement</span>
            </a>
            <a href="/stakeholderExecuting" class="nav-link">
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
                <h2 class="mb-4">Edit Project Income Statement Data </h2>
                <form action="/projectIncomeStatement/{{ $projectIncomeStatement->id }}/update" method="post">
                    @csrf
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Cost Category</label>
                            <input type="text" name="cost_category" id="" class="form-control mb-3 text-white" value="{{$projectIncomeStatement->cost_category}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Description</label>
                            <input type="text" name="description" id="" class="form-control mb-3 text-white" value="{{$projectIncomeStatement->description}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Total</label>
                            <input type="text" name="total" id="" class="form-control mb-3 text-white" value="{{$projectIncomeStatement->total}}" required>
                        </div>
                    </div>
                        <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
                        <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>          
                </form>
            </div>
        </div>
    </div>
</div>
@endsection