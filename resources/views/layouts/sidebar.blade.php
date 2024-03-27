@if(Auth()->User()->roles =='superadmin')
<!-- {{-- Menu Untuk SuperAdmin --}} -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px; margin-right: 10px;">
            <div>
                <h5 class="text-primary mb-0" style="margin-top: 15px;">Operational</h5>
                <h5 class="text-primary">Management</h5>
            </div>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth()->User()->username}}</h6>
                <span>{{Auth()->User()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Reports</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Project</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/initiating" class="nav-item nav-link"><i class="fa fa-rocket me-2"></i>initiating</a>
                    <a href="/planning" class="nav-item nav-link"><i class="fas fa-clipboard me-2"></i>Planning</a>
                    <a href="/executing" class="nav-item nav-link"><i class="fas fa-wrench me-2"></i>Executing</a>
                    <a href="/controlAndMonitoring" class="nav-item nav-link"><i class="fas fa-search me-2"></i>Monitoring</a>
                    <a href="/closing" class="nav-item nav-link"><i class="fa fa-window-close me-2"></i>Closing</a>
                </div>
            </div>
            <hr class="dropdown-divider">
            <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <i class="fa fa-building me-2"></i>
                Enterprise <br> <center>Resources</center>
            </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/human" class="nav-item nav-link"><i class="fa fa-users me-2"></i>Human Capital</a>
                    <a href="/supply" class="nav-item nav-link"><i class="fas fa-clipboard me-2"></i>Supply Chain</a>
                    <a href="/finance" class="nav-item nav-link"><i class="fas fa-coins me-2"></i>Finance</a>
                    <a href="/bussines" class="nav-item nav-link"><i class="fas fa-suitcase me-2"></i>Bussines</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Setting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/user" class="nav-item nav-link"><i class="fa fa-user me-2"></i>User</a>
                    <a href="/logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
            
        </div>

    </nav>
</div>

@elseif(Auth()->User()->roles =='projectManager')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px; margin-right: 10px;">
            <div>
                <h5 class="text-primary mb-0" style="margin-top: 15px;">Operational</h5>
                <h5 class="text-primary">Management</h5>
            </div>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth()->User()->username}}</h6>
                <span>{{Auth()->User()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Reports</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Project</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/executing" class="nav-item nav-link"><i class="fas fa-wrench me-2"></i>Executing</a>
                </div>
            </div>
            <hr class="dropdown-divider">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Setting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
            
        </div>

    </nav>
</div>


@elseif(Auth()->User()->roles =='guest')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px; margin-right: 10px;">
            <div>
                <h5 class="text-primary mb-0" style="margin-top: 15px;">Operational</h5>
                <h5 class="text-primary">Management</h5>
            </div>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth()->User()->username}}</h6>
                <span>{{Auth()->User()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Reports</a>
            <hr class="dropdown-divider">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Setting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
        </div>   
    </nav>
</div>

@elseif(Auth()->User()->roles =='adminInitiating')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px; margin-right: 10px;">
            <div>
                <h5 class="text-primary mb-0" style="margin-top: 15px;">Operational</h5>
                <h5 class="text-primary">Management</h5>
            </div>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth()->User()->username}}</h6>
                <span>{{Auth()->User()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Reports</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Project</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/initiating" class="nav-item nav-link"><i class="fa fa-rocket me-2"></i>initiating</a>
                </div>
            </div>
            <hr class="dropdown-divider">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Setting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
        </div>   
    </nav>
</div>


@elseif(Auth()->User()->roles =='adminPlanning')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px; margin-right: 10px;">
            <div>
                <h5 class="text-primary mb-0" style="margin-top: 15px;">Operational</h5>
                <h5 class="text-primary">Management</h5>
            </div>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth()->User()->username}}</h6>
                <span>{{Auth()->User()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Reports</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Project</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/planning" class="nav-item nav-link"><i class="fas fa-clipboard me-2"></i>Planning</a>
                </div>
            </div>
            <hr class="dropdown-divider">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Setting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
        </div>   
    </nav>
</div>


@elseif(Auth()->User()->roles =='adminExecuting')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px; margin-right: 10px;">
            <div>
                <h5 class="text-primary mb-0" style="margin-top: 15px;">Operational</h5>
                <h5 class="text-primary">Management</h5>
            </div>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth()->User()->username}}</h6>
                <span>{{Auth()->User()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Reports</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Project</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/executing" class="nav-item nav-link"><i class="fas fa-wrench me-2"></i>Executing</a>
                </div>
            </div>
            <hr class="dropdown-divider">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Setting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
        </div>   
    </nav>
</div>


@else(Auth()->User()->roles =='adminControlMonitoring')
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3 d-flex align-items-center">
            <img src="{{asset('assets/img/len.png')}}" style="width: 70px; height: 40px; margin-right: 10px;">
            <div>
                <h5 class="text-primary mb-0" style="margin-top: 15px;">Operational</h5>
                <h5 class="text-primary">Management</h5>
            </div>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth()->User()->username}}</h6>
                <span>{{Auth()->User()->roles}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Reports</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Project</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/controlAndMonitoring" class="nav-item nav-link"><i class="fas fa-search me-2"></i>Monitoring</a>
                </div>
            </div>
            <hr class="dropdown-divider">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog me-2"></i>Setting</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/logout" class="nav-item nav-link"><i class="fas fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </div>
        </div>   
    </nav>
</div>
@endif
<!-- Sidebar End -->