<!doctype html>

<html lang="en">  


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | Bootstrap Simple Admin Template</title>
    <!-- <link href="{{ asset('storage/assets/vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet"> -->
    <link href="{{ asset('storage/assets/vendor/fontawesome/css/fontawesome.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('storage/assets/vendor/fontawesome/css/solid.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('storage/assets/vendor/fontawesome/css/brands.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('storage/assets/vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('storage/assets/css/master.css ') }}" rel="stylesheet">
    <link href="{{ asset('storage/assets/vendor/flagiconcss/css/flag-icon.min.css ') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        @include('sidebar')
        
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav1" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-link"></i> <span>Quick Links</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu" aria-labelledby="nav1">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                    @if(session()->has('name'))
                                    <i class="fas fa-user"></i> <span>{{ session('name') }}</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i>
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{ route('logout') }}" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end of navbar navigation -->
           

            @yield('content')


        </div>
    </div>
    <script src="{{ asset('storage/assets/vendor/jquery/jquery.min.js ') }}"></script>
    <script src="{{ asset('storage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
    <script src="{{ asset('storage/assets/vendor/chartsjs/Chart.min.js ') }}"></script>
    <script src="{{ asset('storage/assets/js/dashboard-charts.js ') }}"></script>
    <script src="{{ asset('storage/assets/js/script.js ') }}"></script>
</body>

</html>
