@extends('layouts.master')
@section('title', 'Dashboard')
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
            <a href="#" class="nav-link" >
                <i class="fas fa-hand-holding-usd me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Case Flow Management</span >
            </a>
    </div>
</center>
</nav>
@endsection