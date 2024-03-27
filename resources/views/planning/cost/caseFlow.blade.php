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
        <h3 class="mb-4">Add CaseFlow</h3>
        <form action="/caseflow/store" method="POST">
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
                <label for="nilai_rupiah" class="form-label text-white">Nilai Rupiah</label>
                <input type="text" name="nilai_rupiah" id="nilai_rupiah" class="form-control mb-3 text-white" required>
            </div>
            <div class="col-md-4">
                <label for="waktu" class="form-label text-white">Waktu</label>
                <input type="date" name="waktu" id="waktu" class="form-control mb-3 text-white" required>
            </div>
        </div>        
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
            <a href="/cost" class="btn btn-sm btn-outline-warning m-2">Cancel</a>
        </form>
    </div>
</div>
@endsection
