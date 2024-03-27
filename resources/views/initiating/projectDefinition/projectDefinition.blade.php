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
        <a href="/initiating" class="nav-link">
            <i class="fa fa-home"></i>
            <span class="d-none d-lg-inline-flex"></span>
        </a>
        <a href="/projectCharter" class="nav-link">
            <i class="far fa-clipboard"></i>
            <span class="d-none d-lg-inline-flex">project Charter</span>
        </a>
        <a href="/projectDefinition" class="nav-link">
            <i class="fas fa-book-open"></i>
            <span class="d-none d-lg-inline-flex">project Definition</span>
        </a>
    </div>
    </center>
</nav>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-10">
    <div class="bg-secondary rounded h-100 p-4">
        <h3 class="mb-4">Project Definition</h3>
        <form action="/projectDefinition/save" method="post">
            @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="" class="form-label text-white">Name Project</label>
                <input type="text" name="name_project" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Code Project</label>
                <input type="text" name="code_project" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Contract Value</label>
                <input type="text" name="contract_value" id="" class="form-control mb-3 text-white" required>
            </div>
        </div>
        <div class="row mb-3">
        <div class="col-md-4">
                <label for="" class="form-label text-white">Bussines Line</label>
                <select name="bussines_line" class="form-select mb-3 text-white" name ="bussines_line "aria-label=".form-select-sm example">
                    <option value="comercial">Comercial</option>
                    <option value="defence">Defence</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Start Contract</label>
                <input type="date" name="date" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Finish Contract</label>
                <input type="date" name="contract_duration" id="" class="form-control mb-3 text-white" required>
            </div>
        </div>   
        <div class="row mb-3"> 
            <div class="col-md-4">
                <label for="" class="form-label text-white">Source of Funds</label>
                <input type="text" name="source_ofFunds" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Bussines Schema</label>
                <input type="text" name="schema_bussines" id="" class="form-control mb-3 text-white" required>
            </div>
        </div>    
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="" class="form-label text-white">Status</label>
                <select name="status" class="form-select mb-3 text-white" name="status" aria-label=".form-select-sm example">
                    <option value="open">Open</option>
                    <option value="close">Closed</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Warranty Periode</label>
                <input type="date" name="warranty_period" id="" class="form-control mb-3 text-white" required>
            </div>
        </div>    
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
        </form>
    </div>
</div>
@endsection
