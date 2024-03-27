@extends('layouts.master')
@section('title', 'control')
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
            <a href="#" class="nav-link" >
                <i class="fa fa-book me-lg-2"></i>
                <span class="d-none d-lg-inline-flex">Lesson Learn</span >
            </a>
    </div>
</center>
</nav>
@endsection