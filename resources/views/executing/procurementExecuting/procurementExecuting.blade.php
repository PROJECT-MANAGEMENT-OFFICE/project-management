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
                <h2 class="mb-4">Beban Bahan</h2>
                <a href="/bebanbahanExecuting/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <form action="/find" method="GET">                    
                    <div class="input-group mb-3">                        
                        <div class="col me-2">
                            <select class="form-control" name="search" id="search">
                            <option value="">Select Project</option>
                            @foreach ($projectDefinition as $item)
                                <option value="{{ $item->name_project }}">{{ $item->name_project }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Find</button>
                        </div>
                    </div>  
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Name Project</small></th>
                                <th><small>Procurement</small></th>
                                <th><small>Vendor</small></th>
                                <th><small>Description Service</small></th>
                                <th><small>Volume</small></th>
                                <th><small>Units</small></th>
                                <th><small>Total</small></th>
                                <th><small>Start to Order</small></th>
                                <th><small>Finish to Order</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bebanbahanExecuting as $r)
                            <tr class="text-white">
                                <td><small>{{$r->name_project}}</small></td> 
                                <td><small>{{$r->procurement}}</small></td>
                                <td><small>{{$r->vendor}}</small></td>
                                <td><small>{{$r->description_service}}</small></td>
                                <td><small>{{$r->volume}}</small></td>
                                <td><small>{{$r->units}}</small></td>
                                <td><small>{{$r->total}}</small></td>
                                <td><small>{{$r->start_toOrder}}</small></td>
                                <td><small>{{$r->finish_toOrder}}</small></td>
                                <td>
                                    <a href="/bebanbahanExecuting/{{$r->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>      
                                    <a href="/bebanbahanExecuting/{{$r->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
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
                <h2 class="mb-4">Beban subkon</h2>
                <a href="/bebansubkonExecuting/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <form action="/find" method="GET">                    
                    <div class="input-group mb-3">                        
                        <div class="col me-2">
                            <select class="form-control" name="search" id="search">
                            <option value="">Select Project</option>
                            @foreach ($projectDefinition as $item)
                                <option value="{{ $item->name_project }}">{{ $item->name_project }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Find</button>
                        </div>
                    </div>  
                </form>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" >
                        <thead>
                            <tr class="text-white">
                                <th><small>Name Project</small></th>
                                <th><small>Procurement</small></th>
                                <th><small>Vendor</small></th>
                                <th><small>Description Service</small></th>
                                <th><small>Volume</small></th>
                                <th><small>Units</small></th>
                                <th><small>Total</small></th>
                                <th><small>Start to Order</small></th>
                                <th><small>Finish to Order</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bebansubkonExecuting as $r)
                            <tr class="text-white">
                                <td><small>{{$r->name_project}}</small></td>
                                <td><small>{{$r->procurement_subkon}}</small></td>
                                <td><small>{{$r->vendor_subkon}}</small></td>
                                <td><small>{{$r->description_service_subkon}}</small></td>
                                <td><small>{{$r->volume_subkon}}</small></td>
                                <td><small>{{$r->units_subkon}}</small></td>
                                <td><small>{{$r->total_subkon}}</small></td>
                                <td><small>{{$r->start_toOrder_subkon}}</small></td>
                                <td><small>{{$r->finish_toOrder_subkon}}</small></td>
                                <td>
                                    <a href="/bebansubkonExecuting/{{$r->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>      
                                    <a href="/bebansubkonExecuting/{{$r->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
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
                <h2 class="mb-4">Tagihan</h2>
                <a href="/tagihanExecuting/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <td><small>Vendor</small></td>
                                <th><small>Deskripsi</small></th>
                                <th><small>Curr</small></th>
                                <th><small>Nilai Tagihan</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tagihanExecuting as $t)
                            <tr class="text-white">
                                <td><small>{{$t->vendor}}</small></td>
                                <td><small>{{$t->deskripsi}}</small></td>
                                <td><small>{{$t->curr}}</small></td>
                                <td><small>{{$t->nilai_tagihan}}</small></td>
                                <td>
                                    <a href="/tagihanExecuting/{{$t->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>      
                                    <a href="/tagihanExecuting/{{$t->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
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