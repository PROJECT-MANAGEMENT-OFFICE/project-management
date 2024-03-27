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
            <a href="/costMonitoring" class="nav-link">
                <i class="fas fa-coins me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Cost</span>
            </a>
            <a href="/riskMonitoring" class="nav-link">
                <i class="fa fa-exclamation-triangle me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Risk</span>
            </a>
            <a href="/communicationMonitoring" class="nav-link">
                <i class="far fa-comments me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Communication</span>
            </a>
    </div>
</center>
</nav>
<div class="container-fluid pt-4 px-4">
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Domestic Vendor Payments</h2>
                <a href="/domesticVendorPayments/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr class="text-white">
                                <th valign="top"><small>Name Project</small></th>
                                <th valign="top"><small>Code Project</small></th>
                                <th valign="top"><small>Contract Value</small></th>
                                <th valign="top"><small>Business Line</small></th>
                                <th valign="top"><small>Date</small></th>
                                <th valign="top"><small>Status</small></th>
                                <th valign="top"><small>Source of Funds</small></th>
                                <th valign="top"><small>Business Schema</small></th>
                                <th valign="top"><small>Contract Duration</small></th>
                                <th valign="top"><small>Warranty Period</small></th>
                                <th valign="top"><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-white">
                                
                                <td><small>
                                    <a href="/domesticVendorPayments/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>   
                                    <a href="/domesticVendorPayments/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                                </small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Overseas Vendor Payment</h2>
                <a href="/overseasVendorPayment/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr class="text-white">
                                <th valign="top"><small>Name Project</small></th>
                                <th valign="top"><small>Code Project</small></th>
                                <th valign="top"><small>Contract Value</small></th>
                                <th valign="top"><small>Business Line</small></th>
                                <th valign="top"><small>Date</small></th>
                                <th valign="top"><small>Status</small></th>
                                <th valign="top"><small>Source of Funds</small></th>
                                <th valign="top"><small>Business Schema</small></th>
                                <th valign="top"><small>Contract Duration</small></th>
                                <th valign="top"><small>Warranty Period</small></th>
                                <th valign="top"><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr class="text-white">
                                <td><small>
                                    <a href="/overseasVendorPayment/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>   
                                    <a href="/overseasVendorPayment/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                                </small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4">Cash</h2>
                <a href="/cash/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr class="text-white">
                                <th valign="top"><small>Name Project</small></th>
                                <th valign="top"><small>Code Project</small></th>
                                <th valign="top"><small>Contract Value</small></th>
                                <th valign="top"><small>Business Line</small></th>
                                <th valign="top"><small>Date</small></th>
                                <th valign="top"><small>Status</small></th>
                                <th valign="top"><small>Source of Funds</small></th>
                                <th valign="top"><small>Business Schema</small></th>
                                <th valign="top"><small>Contract Duration</small></th>
                                <th valign="top"><small>Warranty Period</small></th>
                                <th valign="top"><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-white">
                                <td><small>
                                    <a href="/cash/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>   
                                    <a href="/cash/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                                </small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection