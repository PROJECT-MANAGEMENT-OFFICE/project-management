@extends('layouts.master')
@section('title', 'Add Data')
@section('content')
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px;">
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
</nav>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-10">
    <div class="bg-secondary rounded h-100 p-4">
        <h3 class="mb-4">Add Review and Meetings Data</h3>
        <form action="/reviewMeeting/save" method="post">
            @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="" class="form-label text-white">Deliverable</label>
                <input type="text" name="deliverable" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Description</label>
                <input type="text" name="description" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Delivery Method</label>
                <input type="text" name="delivery_method" id="" class="form-control mb-3 text-white" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="" class="form-label text-white">Frequency</label>
                <input type="text" name="frequency" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label text-white">Owner</label>
                <input type="text" name="owner" id="" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4"> 
                <label for="" class="form-label text-white">Audience</label>
                <input type="text" name="audience" id="" class="form-control mb-3 text-white" required>
            </div>
        </div>  
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
        </form>
    </div>
</div>
@endsection
