@extends('layouts.master')
@section('title', 'Edit Data')
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
        <h3 class="mb-4">Add Beban Bahan Cost</h3>
        <form action="/bebanBahanCost/{{ $bebanBahan->id }}/update" method="POST">
            @csrf
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="procurement" class="form-label text-white">Procurement</label>
                <select name="procurement" id="procurement" class="form-control mb-3 text- bg-dark">
                    <option selected="true" disabled="disabled" hidden>Choose One</option>  
                    <option value="import" {{ $bebanBahan->procurement == 'import' ? 'selected' : '' }}>Import</option>
                    <option value="domestic" {{ $bebanBahan->procurement == 'domestic' ? 'selected' : '' }}>Domestic</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="vendor" class="form-label text-white">Vendor</label>
                <input type="text" name="vendor" id="vendor" class="form-control mb-3 text-white" value="{{ $bebanBahan->vendor }}" required>
            </div>
            <div class="col-md-4">
                <label for="materialService" class="form-label text-white">Material / Service</label>
                <input type="text" name="materialService" id="materialService" class="form-control mb-3 text-white" value="{{ $bebanBahan->material }}" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <label for="description" class="form-label text-white">Description</label>
                <input type="text" name="description" id="description" class="form-control mb-3 text-white" value="{{ $bebanBahan->description }}" required>
            </div>
            <div class="col-md-4">
                <label for="volume" class="form-label text-white">Volume</label>
                <input type="number" name="volume" id="volume" class="form-control mb-3 text-white" value="{{ $bebanBahan->volume }}" required>
            </div>
            <div class="col-md-4"> 
                <label for="unit" class="form-label text-white">Unit</label>
                <select name="unit" id="unit" class="form-control mb-3 text- bg-dark" value="{{ $bebanBahan->unit }}">
                    <option selected="true" disabled="disabled" hidden>Choose One</option>  
                    <option value="meter" {{ $bebanBahan->unit == 'meter' ? 'selected' : '' }}>Meter</option>
                    <option value="lots" {{ $bebanBahan->unit == 'lots' ? 'selected' : '' }}>Lots</option>
                    <option value="pcs" {{ $bebanBahan->unit == 'pcs' ? 'selected' : '' }}>Pcs</option>
                </select>
            </div>
            <div class="col-md-4"> 
                <label for="total" class="form-label text-white">Total</label>
                <input type="text" name="total" id="total" class="form-control mb-3 text-white" value="{{ $bebanBahan->total }}" required>
            </div>
        </div>  
            <button type="submit" class="btn btn-sm btn-outline-success m-2" >Save</button>
            <button type="reset" class="btn btn-sm btn-outline-danger m-2">Reset</button>
            <a href="/cost" class="btn btn-sm btn-outline-warning m-2">Cancel</a>
        </form>
    </div>
</div>
@endsection