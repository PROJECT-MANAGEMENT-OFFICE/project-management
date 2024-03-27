@extends('layouts.master')
@section('tittle','Roles')
@section('content')   
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
</nav>
<div class="container-fluid pt-4 px-4">
<div class="row g-10">
<div class="col-sm-12 col-xl-12">
    <div class="bg-secondary rounded h-100 p-4">
        <h2 class="mb-4">Roles</h2>
        <a href="/user/add" class="btn btn-sm btn-outline-success m-2"><i class="fa fa-plus me-2"></i>Add Data</a><br>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="example">
                <thead>
                    <tr class="text-white">
                        <th>ID User</th>
                        <th>Username </th>
                        <th>Roles</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $u)
                    <tr class="text-white">
                        <td>{{$u->id}}</td>
                        <td>{{$u->username}}</td>
                        <td>{{$u->roles}}</td>
                        <td>
                            <a href="/user/{{$u->id}}/edit" class="btn btn-sm btn-outline-info m-2"><i class="fa fa-pen me-2"></i>Edit</a>   
                            <a href="/user/{{$u->id}}/delete" class="btn btn-sm btn-outline-danger m-2" onclick="return confirm('are you sure to delete this?')"><i class="fa fa-trash me-2"></i>Delete</a>   
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


