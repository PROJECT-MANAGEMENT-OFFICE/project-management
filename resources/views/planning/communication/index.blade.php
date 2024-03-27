@extends('layouts.master')
@section('title', 'Communication')
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
    <div class="row g-10">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h4 class="mb-4"><i class="fa fa-book"></i>  Reports</h4>
                <a href="/reports/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br> 
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="text-white">
                                <th><small>Deliverable</small></th>
                                <th><small>Description</small></th>
                                <th><small>Delivery Method</small></th>
                                <th><small>Frequency</small></th>
                                <th><small>Owner</small></th>
                                <th><small>Audience</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $r)
                                <tr>
                                    <td><small>{{$r->deliverable}}</small></td>
                                    <td><small>{{$r->description}}</small></td>
                                    <td><small>{{$r->delivery_method}}</small></td>
                                    <td><small>{{$r->frequency}}</small></td>
                                    <td><small>{{$r->owner}}</small></td>
                                    <td><small>{{$r->audience}}</small></td>
                                    <td>
                                        <a href="/reports/{{ $r->id }}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>
                                        <a href="/reports/{{ $r->id }}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>
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
                <h4 class="mb-4"><i class="	fas fa-chalkboard-teacher"></i>  Presentations</h4>
                <a href="/presentations/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Deliverable</small></th>
                                <th><small>Description</small></th>
                                <th><small>Delivery Method</small></th>
                                <th><small>Frequency</small></th>
                                <th><small>Owner</small></th>
                                <th><small>Audience</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($presentation as $p)
                                <tr>
                                    <td><small>{{$p->deliverable}}</small></td>
                                    <td><small>{{$p->description}}</small></td>
                                    <td><small>{{$p->delivery_method}}</small></td>
                                    <td><small>{{$p->frequency}}</small></td>
                                    <td><small>{{$p->owner}}</small></td>
                                    <td><small>{{$p->audience}}</small></td>
                                    <td>
                                        <a href="/presentations/{{ $p->id }}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>
                                        <a href="/presentations/{{ $p->id }}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>
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
                <h4 class="mb-4"><i class="	fas fa-bullhorn"></i>  Project Anouncements</h4>
                <a href="/projectAnouncement/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Deliverable</small></th>
                                <th><small>Description</small></th>
                                <th><small>Delivery Method</small></th>
                                <th><small>Frequency</small></th>
                                <th><small>Owner</small></th>
                                <th><small>Audience</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectAnouncement as $a)
                                <tr>
                                    <td><small>{{$a->deliverable}}</small></td>
                                    <td><small>{{$a->description}}</small></td>
                                    <td><small>{{$a->delivery_method}}</small></td>
                                    <td><small>{{$a->frequency}}</small></td>
                                    <td><small>{{$a->owner}}</small></td>
                                    <td><small>{{$a->audience}}</small></td>
                                    <td>
                                        <a href="/projectAnouncement/{{ $a->id }}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>
                                        <a href="/projectAnouncement/{{ $a->id }}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>
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
                <h4 class="mb-4"><i class="	fas fa-comments"></i>  Review and Meetings</h4>
                <a href="/reviewMeeting/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Deliverable</small></th>
                                <th><small>Description</small></th>
                                <th><small>Delivery Method</small></th>
                                <th><small>Frequency</small></th>
                                <th><small>Owner</small></th>
                                <th><small>Audience</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviewMeeting as $m)
                                <tr>
                                    <td><small>{{$m->deliverable}}</small></td>
                                    <td><small>{{$m->description}}</small></td>
                                    <td><small>{{$m->delivery_method}}</small></td>
                                    <td><small>{{$m->frequency}}</small></td>
                                    <td><small>{{$m->owner}}</small></td>
                                    <td><small>{{$m->audience}}</small></td>
                                    <td>
                                        <a href="/reviewMeeting/{{ $m->id }}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>
                                        <a href="/reviewMeeting/{{ $m->id }}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>
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
                <h4 class="mb-4"><i class="fas fa-users"></i>  Team Morale</h4>
                <a href="/teamMorale/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
                <br>
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="example">
                        <thead>
                            <tr class="text-white">
                                <th><small>Deliverable</small></th>
                                <th><small>Description</small></th>
                                <th><small>Delivery Method</small></th>
                                <th><small>Frequency</small></th>
                                <th><small>Owner</small></th>
                                <th><small>Audience</small></th>
                                <th><small>Action</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teamMorale as $t)
                                <tr>
                                    <td><small>{{$t->deliverable}}</small></td>
                                    <td><small>{{$t->description}}</small></td>
                                    <td><small>{{$t->delivery_method}}</small></td>
                                    <td><small>{{$t->frequency}}</small></td>
                                    <td><small>{{$t->owner}}</small></td>
                                    <td><small>{{$t->audience}}</small></td>
                                    <td>
                                        <a href="/teamMorale/{{ $t->id }}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>
                                        <a href="/teamMorale/{{ $t->id }}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>
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