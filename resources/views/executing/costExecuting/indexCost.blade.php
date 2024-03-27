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
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h2 class="mb-4"></i>Beban Bahan</h2>
                <a href="/bebanBahanCostExecuting/create" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br> 
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-white">
                                <th><small>Procurement</small></th>
                                <th><small>Vendor</small></th>
                                <th><small>Material</small></th>
                                <th><small>Description</small></th>
                                <th><small>Volume</small></th>
                                <th><small>Unit</small></th>
                                <th><small>Total</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @foreach ($bebanBahanCost as $row)
                                <tr>
                                    <td><small>{{$row->procurement}}</small></td>
                                    <td><small>{{$row->vendor}}</small></td>
                                    <td><small>{{$row->material}}</small></td>
                                    <td><small>{{$row->description}}</small></td>
                                    <td><small>{{$row->volume}}</small></td>
                                    <td><small>{{$row->unit}}</small></td>
                                    <td><small>{{$row->total}}</small></td>
                                    <td>
                                        <a href="/bebanBahanCost/{{ $row->id }}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>                                        
                                        <a href="/bebanBahanCost/{{ $row->id }}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>
                                    </td>
                                </tr>
                            @endforeach
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
                <h2 class="mb-4">Term of Payment Plan</h2>
                <a href="/termOfPayment/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" >
                        <thead>
                            <tr class="text-white">
                                <th><small>Term Type</small></th>
                                <th><small>Value (%)</small></th>
                                <th><small>Value (Rp)</small></th>
                                <th><small>Month (Plan)</small></th>
                                <th><small>Radios</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($TermOfPayment as $t)
                            <tr class="text-white">
                                <td><small>{{$t->term_type}}</small></td>
                                <td><small>{{$t->value_term}}</small></td>
                                <td><small>{{$t->value_rp_term}}</small></td>
                                <td><small>{{$t->month_plan}}</small></td>
                                <td><small>{{$t->guarantee}}</small></td>
                                <td>
                                    <a href="/termOfPayment/{{$t->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>      
                                    <a href="/termOfPayment/{{$t->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                                </td>
                            </tr>
                            @endforeach
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
                <h2 class="mb-4">Project Income Statement</h2>
                <a href="/projectIncomeStatement/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Cost Category</small></th>
                                <th><small>Description</small></th>
                                <th><small>Total</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectIncomeStatement as $p)
                            <tr class="text-white">
                                <td><small>{{$p->cost_category}}</small></td> 
                                <td><small>{{$p->description}}</small></td>
                                <td><small>{{$p->total}}</small></td>
                                <td>
                                    <a href="/projectIncomeStatement/{{$p->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>      
                                    <a href="/projectIncomeStatement/{{$p->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection