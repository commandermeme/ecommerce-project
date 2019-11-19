<!--Header-->
<header class="app-header navbar pr-4">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="{{ asset('dist/img/brand/logo.svg') }}" width="89" height="25" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="{{ asset('dist/img/brand/sygnet.svg') }}" width="30" height="30" alt="CoreUI Logo">
    </a>

    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            {{-- <div class="input-group">
                <input class="form-control" id="appendedInputButton" size="16" type="text" placeholder="Search">
                <span class="input-group-append">
                    <button class="btn btn-secondary" type="button">Go</button>
                </span>
            </div> --}}
        </li>
    </ul>
    
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-bell"></i>
                <span class="badge badge-pill badge-danger">1</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>You have 1 notifications</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="icon-user-follow text-success"></i> New user registered
                </a>
            </div>
        </li>
        <li class="nav-item dropdown d-md-down-none">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="icon-list"></i>
                <span class="badge badge-pill badge-warning">1</span>
            </a>

            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                <div class="dropdown-header text-center">
                    <strong>You have 1 pending tasks</strong>
                </div>

                <a class="dropdown-item" href="#">
                    <div class="small mb-1">Finish this ecommerce project
                        <span class="float-right">
                            <strong>20%</strong>
                        </span>
                    </div>
                    <span class="progress progress-xs">
                        <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </span>
                </a>
            </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{ asset('dist/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com"><span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
                <strong>Your Shop</strong>
            </div>

            <a class="dropdown-item" href="#">
                <i class="fa fa-tasks"></i> Greencity
                <p class="text-muted">View or create Shops</p>
            </a>

            <a class="dropdown-item" href="#">
                <i class="fa fa-cart-plus"></i> Purchases
            </a>

            <a class="dropdown-item" href="#">
                <i class="fa fa-wrench"></i> Settings
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-lock"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
        </li>
    </ul>
</header>