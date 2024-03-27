@extends('layouts.master')
@section('title', 'control')
@section('content')
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
<center>
    <div class="navbar-nav align-items-center ms-auto">
            <a href="/procurementMonitoring" class="nav-link" >
                <i class="fa fa-shopping-cart me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Procurement</span >
            </a>
            <a href="/costMonitoring" class="nav-link" data-bs-toggle="dropdown">
                <i class="fas fa-coins me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Cost</span>
            </a>
            <a href="/riskMonitoring" class="nav-link" data-bs-toggle="dropdown">
                <i class="fa fa-exclamation-triangle me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Risk</span>
            </a>
            <a href="/communicationMonitoring" class="nav-link" data-bs-toggle="dropdown">
                <i class="far fa-comments me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Communication</span>
            </a>
    </div>
</center>
</nav>
<div class="container-fluid pt-4 px-4">
<div class="row g-4">
<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h2 class="mb-4">Pembayaran Vendor Luar Negeri</h2>
        <form>
            <div class="mb-3">
                <label for="" class="form-label">Partner</label>
                <input type="text" class="form-control" name="partner" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">For Expenditure</label>
                <input type="text" class="form-control" name="for_expenditure" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Payment date</label>
                <input type="date" class="form-control" name="payment_date" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Currency</label>
                <input type="text" class="form-control" name="currency" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Value</label>
                <input type="text" class="form-control" name="value" id="">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Relation Eq IDR</label>
                <input type="text" class="form-control" name="relatin_eqidr" id="">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection