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
        <h2 class="mb-4">Risk</h2>
        <form action="/risk/{{ $risks->id }}/update" method="post">
            @csrf
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="nameProject" class="form-label text-white">Name Project</label>
                <select name="name_project" id="nameProject" class="form-select mb-3 text-white" required>
                    @foreach($projectDefinition as $project)
                    <option value="{{ $project-> name_project}}">{{$project->name_project}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label text-white">Entry Date</label>
                <input type="date" name="start_date" id="" value="{{$risks->start_date}}" class="form-control mb-3 text-white"  required>
            </div>
        </div>   
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="" class="form-label text-white">Description Ofrisk</label>
                <input type="text" name="description_ofrisk" id="" value="{{$risks->description_ofrisk}}" class="form-control mb-3 text-white" required>
            </div> 
            <div class="col-md-6">
                <label for="" class="form-label text-white">Submitter</label>
                <select name="submitter" id="" value="{{$risks->submitter}}" class="form-select mb-3 text-white" required>
                    <option value="Project Excecution">Project Excecution</option>
                    <option value="Project Planning">Project Planning</option>
                    <option value="Project Management Office">Project Management Office</option>
                    <option value="Supply Chain Management">Supply Chain Management</option>
                    <option value="System Engineer">System Engineer</option>
                    <option value="Finance">Finance</option>
                    <option value="Budgeting">Budgeting</option>
                </select>
            </div> 
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="" class="form-label text-white">Risk Response Type</label>
                <select name="Risk_reponse_type" id="Risk_reponse_type" value="{{$risks->Risk_reponse_type}}" class="form-select mb-3 text-white" required>
                    <option value="Accept">Accept</option>
                    <option value="Mitigate">Mitigate</option>
                    <option value="Transfer">Transfer</option>
                    <option value="Avoid">Avoid</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label text-white">Risk Reponse Plan</label>
                <input type="" name="Risk_reponse_plan" id="" value="{{$risks->Risk_reponse_plan}}" class="form-control mb-3 text-white" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="" class="form-label text-white">Probability Factor</label>
                <select name="probability_factor" id="probability" value="{{$risks->probability_factor}}" class="form-select mb-3 text-white" onchange="calculateResult()" required>
                    <option value="1">Very Low - 1</option>
                    <option value="2">Low - 2</option>
                    <option value="3">Moderate - 3</option>
                    <option value="4">High - 4</option>
                    <option value="5">Very High - 5</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label text-white">Impact Factor</label>
                <select name="impact_factor" id="impact" value="{{$risks->impact_factor}}" class="form-select mb-3 text-white" onchange="calculateResult()" required>
                    <option value="1">Very Low - 1</option>
                    <option value="2">Low - 2</option>
                    <option value="3">Moderate - 3</option>
                    <option value="4">High - 4</option>
                    <option value="5">Very High - 5</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="" class="form-label text-white">Exposure</label>
                <input type="text" name="exposure" id="result" value="{{$risks->exposure}}" class="form-control mb-3" required readonly>
            </div>

            <script>
                function calculateResult() {
                    let probability = parseInt(document.getElementById("probability").value);
                    let impact = parseInt(document.getElementById("impact").value);
                    let result = probability * impact;
                    document.getElementById("result").value = result;
                }
            </script>
            <div class="col-md-6">
                <label for="" class="form-label text-white">Assigned To</label>
                <select name="assigned_to" id="" value="{{$risks->assigned_to}}" class="form-select mb-3 text-white" required>
                    <option value="Project Excecution">Project Excecution</option>
                    <option value="Project Planning">Project Planning</option>
                    <option value="Project Management Office">Project Management Office</option>
                    <option value="Supply Chain Management">Supply Chain Management</option>
                    <option value="System Engineer">System Engineer</option>
                    <option value="Finance">Finance</option>
                    <option value="Budgeting">Budgeting</option>
                </select>
            </div> 
        </div>
        <div class="row mb-2">
            <div class="col-md-6">
                <label for="" class="form-label text-white">Status</label>
                <select name="status" id="" value="{{$risks->status}}" class="form-select mb-3 text-white" required>
                    <option value="Planned">Planned</option>
                    <option value="in_process">In Process</option>
                    <option value="Closed">Closed</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="" class="form-label text-white">Due Date</label>
                <input type="date" name="due_date" id="" value="{{$risks->due_date}}" class="form-control mb-3 text-white" required>
            </div>
        </div>    
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
        </form>
    </div>
</div>
@endsection
