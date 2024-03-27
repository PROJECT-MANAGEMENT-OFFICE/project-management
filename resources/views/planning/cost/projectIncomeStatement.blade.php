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
        <h3 class="mb-4">Add Project Income Statement</h3>
        <form action="/projectIncomeStatement/store" method="POST">
            @csrf
        <div class="row mb-3"> 
            <div class="col-md-6">
                <label for="nameProject" class="form-label text-white">Name Project</label>
                <select name="name_project" id="nameProject" class="form-select mb-3 text-white" required>
                    @foreach($projectDefinition as $project)
                    <option value="{{ $project-> name_project}}">{{$project->name_project}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <label for="cost_category" class="form-label text-white">Cost Category</label>
                <select name="cost_category" id="cost_category" class="form-control mb-3 text- bg-dark">
                    <option selected="true" disabled="disabled" hidden>Choose One</option>  
                    <option value="direct cost">Direct Cost</option>
                    <option value="indirect cost">Indirect Cost</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="description" class="form-label text-white">Description</label>
                <input type="text" name="description" id="description" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="total" class="form-label text-white">Total</label>
                <input type="text" name="total" id="total" class="form-control mb-3 text-white" required>
            </div>
        </div>        
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
            <a href="/cost" class="btn btn-sm btn-outline-warning m-2">Cancel</a>
        </form>
    </div>
</div>
@endsection
