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
                <h2 class="mb-4">Beban Subkon</h2>
                <form action="/bebansubkon/{{ $bebansubkon->id }}/update" method="post">
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
                            <label for="" class="form-label text-white">Procurement</label>
                            <select name="procurement_subkon" id="" class="form-select mb-3 text-white" required>
                                <option value="IMPOR">IMPOR</option>
                                <option value="LOKAL">LOKAL</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Vendor</label>
                            <input type="text" name="vendor_subkon" id="" value="{{$bebansubkon->vendor_subkon}}"class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Description/ Service</label>
                            <input type="text" name="description_service_subkon" id="" value="{{$bebansubkon->description_service_subkon}}" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Volume</label>
                            <input type="text" name="volume_subkon" id="" value="{{$bebansubkon->volume_subkon}}" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Units</label>
                            <input type="text" name="units_subkon" id="" value="{{$bebansubkon->units_subkon}}" class="form-control mb-3 text-white"  required>
                        </div>   
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Total</label>
                            <input type="text" name="total_subkon" id="" value="{{$bebansubkon->total_subkon}}" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Start to Order</label>
                            <input type="date" name="start_toOrder_subkon" id="" value="{{$bebanbahanExecuting->start_toOrder_subkon}}" class="form-control mb-3 text-white"  required>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label text-white">Finish to Order</label>
                            <input type="date" name="finish_toOrder_subkon" id="" value="{{$bebanbahanExecuting->finish_toOrder_subkon}}" class="form-control mb-3 text-white"  required>
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