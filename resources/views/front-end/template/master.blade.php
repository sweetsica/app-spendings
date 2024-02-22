<!DOCTYPE html>
<html lang="en">
<head>
    @hasSection('meta')
        @yield('meta')
    @else
        <meta charset="utf-8" />
        <title>App Spending Sweetsica ♥</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="An app to tracking spending" name="description" />
        <meta content="Sweetsica" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    @endif
    @hasSection('css')
        @yield('css')
    @endif
</head>
@php
    if(\Illuminate\Support\Facades\Session::get('user_id') == ''){
        \Illuminate\Support\Facades\Redirect::route('login');
    }
@endphp
<body>

<!-- Top Bar Start -->
<div class="topbar">
{{--    @hasSection('topbar')--}}
{{--        @yield('topbar')--}}
{{--    @else--}}
        <!-- Navbar -->
        <nav class="navbar-custom">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="index.html" class="logo">
                            <span>
                                <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                            </span>
                    <span>
                                <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                            </span>
                </a>
            </div>

            <ul class="list-unstyled topbar-nav float-right mb-0">

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline nav-icon"></i>
                        <span class="badge badge-danger badge-pill noti-icon-badge">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            Notifications (258)
                        </h6>
                        <div class="slimscroll notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                <p class="notify-details">Your item is shipped<small class="text-muted">It is a long established fact that a reader will</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details">Your order is placed<small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                            </a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message"></i></div>
                                <p class="notify-details">New Message received<small class="text-muted">You have 87 unread messages</small></p>
                            </a>
                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary">
                            View all <i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                        <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted mr-2"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted mr-2"></i> My Wallet</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-gear text-muted mr-2"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted mr-2"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                    </div>
                </li>
            </ul>

            <ul class="list-unstyled topbar-nav mb-0">

                <li>
                    <button class="button-menu-mobile nav-link waves-effect waves-light">
                        <i class="mdi mdi-menu nav-icon"></i>
                    </button>
                </li>

                <li class="hide-phone app-search">
                    <form role="search" class="">
                        <input type="text" placeholder="Search..." class="form-control">
                        <a href=""><i class="fas fa-search"></i></a>
                    </form>
                </li>

            </ul>

        </nav>
        <!-- end navbar-->
{{--    @endif--}}
</div>
<!-- Top Bar End -->

@hasSection('top-wrapper')
    @yield('top-wrapper')
@else
    <div class="page-wrapper-img">
        <div class="page-wrapper-img-inner">
            <div class="sidebar-user media">
                <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
                <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
                <div class="media-body">
                    <h5 class="text-light">Mr. Sweetsica </h5>
                    <ul class="list-unstyled list-inline mb-0 mt-2">
                        <li class="list-inline-item">
                            <a href="#" class=""><i class="mdi mdi-account text-light"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class=""><i class="mdi mdi-settings text-light"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{route('logout')}}" class=""><i class="mdi mdi-power text-danger"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page-Title -->
            @hasSection('title')
                @yield('title')
            @else
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="float-right align-item-center mt-2">
                                <button class="btn btn-info px-4 align-self-center report-btn">Create Report</button>
                            </div>
                            <h4 class="page-title mb-2"><i class="mdi mdi-view-dashboard-outline mr-2"></i>Dashboard</h4>
                            <div class="">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Spending</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Dashboard-2</li>
                                </ol>
                            </div>
                        </div><!--end page title box-->
                    </div><!--end col-->
                </div><!--end row-->
            @endif
            <!-- end page title end breadcrumb -->
        </div><!--end page-wrapper-img-inner-->
    </div><!--end page-wrapper-img-->
@endif
<div class="page-wrapper">
    <div class="page-wrapper-inner">
        @hasSection('sidebar')
            @yield('sidebar')
        @else
            <!-- Left Sidenav -->
            <div class="left-sidenav">
                <ul class="metismenu left-sidenav-menu" id="side-nav">
                    <li class="menu-title"><a href="{{route('home')}}">Dashboard</a></li>

                    <li>
                        <a href="javascript: void(0);"><i class="mdi mdi-apps"></i><span>Setting</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{route('source.index')}}"><span>Source</span></a></li>
                            <li><a href="{{route('category.index')}}"><span>Category</span></a></li>
                            <li><a href="{{route('history.index')}}"><span>History</span></a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Contact us</li>

                </ul>
            </div>
            <!-- end left-sidenav-->
        @endif
        <!-- Page Content-->
            <div class="page-content">
{{--                section-content--}}
                @hasSection('content')
                    @yield('content')
                @else
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h4 class="mt-0">Hello ! Matt Rosales</h4>
                                            <p class="text-muted">Good morning ! Have a nice day.</p>
                                            <div class="row justify-content-center">
                                                <div class="col-md-3">
                                                    <div class="card mb-0">
                                                        <div class="card-body">
                                                            <div class="float-right">
                                                                <i class="dripicons-user-group font-24 text-secondary"></i>
                                                            </div>
                                                            <span class="badge badge-danger">Sessions</span>
                                                            <h3 class="font-weight-bold">24k</h3>
                                                            <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>8.5%</span>New Sessions Today</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card mb-0">
                                                        <div class="card-body">
                                                            <div class="float-right">
                                                                <i class="dripicons-cart  font-20 text-secondary"></i>
                                                            </div>
                                                            <span class="badge badge-info">Avg.Sessions</span>
                                                            <h3 class="font-weight-bold">00:18</h3>
                                                            <p class="mb-0 text-muted text-truncate"><span class="text-danger"><i class="mdi mdi-trending-down"></i>1.5%</span> Weekly Avg.Sessions</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card mb-0">
                                                        <div class="card-body">
                                                            <div class="float-right">
                                                                <i class="dripicons-jewel font-20 text-secondary"></i>
                                                            </div>
                                                            <span class="badge badge-warning">Bounce Rate</span>
                                                            <h3 class="font-weight-bold">$2400</h3>
                                                            <p class="mb-0 text-muted text-truncate"><span class="text-danger"><i class="mdi mdi-trending-down"></i>35%</span> Bounce Rate Weekly</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card mb-0">
                                                        <div class="card-body">
                                                            <div class="float-right">
                                                                <i class="dripicons-wallet font-20 text-secondary"></i>
                                                            </div>
                                                            <span class="badge badge-success">Goal Completions</span>
                                                            <h3 class="font-weight-bold">85000</h3>
                                                            <p class="mb-0 text-muted text-truncate"><span class="text-success"><i class="mdi mdi-trending-up"></i>10.5%</span> Completions Weekly</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 align-self-center">
                                            <img src="assets/images/dash.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                                <div class="card-body bg-light">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="media">
                                                <img src="assets/images/logo-sm.png" height="40" class="mr-4" alt="...">
                                                <div class="media-body align-self-center">
                                                    <p class="mb-0 text-muted">There are many variations of passages
                                                        of Lorem Ipsum available, but the majority
                                                        have suffered alteration in some form, by injected
                                                        humour, or randomised words.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 align-self-center text-center">
                                            <button class="btn btn-sm btn-warning">Download Report</button>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Overview</h4>
                                    <div class="chart-demo dash-apex-chart">
                                        <div id="d2_overview" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Performance Report</h4>
                                    <div class="chart-demo dash-apex-chart">
                                        <div id="d2_performance" class="apex-charts"></div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Users by (Only USA)</h4>
                                    <div id="user_usa" class="dashboard-map"></div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>  <!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Visits of Males & Females</h4>
                                    <div class="xender-visits mt-4">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <i class="fas fa-male"></i>
                                            </div>
                                            <div class="col-sm-6">
                                                <h3 class="font-weight-bold">1254</h3>
                                                <p class="mb-0 text-muted">Visitors on Site now</p>
                                            </div>
                                            <div class="col-sm-3">
                                                <i class="fas fa-female female"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div id="d2_visitors" class="apex-charts"></div>
                                    </div>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-4">
                                                <h4 class="">5203</h4>
                                                <p class="mb-0 text-muted font-13 text-truncate">Today's Visits</p>
                                            </div>
                                            <div class="col-4">
                                                <h4 class="">55203</h4>
                                                <p class="mb-0 text-muted font-13 text-truncate">Last Week Visits</p>
                                            </div>
                                            <div class="col-4">
                                                <h4 class="">98020</h4>
                                                <p class="mb-0 text-muted font-13 text-truncate">Last Month Visits</p>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div>  <!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mt-0">Social Report</h4>
                                    <div class="table-responsive dash-social">
                                        <table id="datatable" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Network</th>
                                                <th>Sessions</th>
                                                <th>Con.Rate</th>
                                                <th>Avg.Time</th>
                                                <th>Bounce Rate</th>
                                                <th>%Change</th>
                                            </tr><!--end tr-->
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td><i class="mdi mdi-google text-danger mr-1 font-18"></i>Google</td>
                                                <td>4541</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>57.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-yahoo text-info mr-1 font-18"></i>Yahoo</td>
                                                <td>1522</td>
                                                <td>4.2%</td>
                                                <td>4:20</td>
                                                <td>62.8%</td>
                                                <td>-12.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-web text-info mr-1 font-18"></i>UC Browser</td>
                                                <td>1292</td>
                                                <td>3.2%</td>
                                                <td>5:20</td>
                                                <td>33.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-facebook text-primary mr-1 font-18"></i>Facebook</td>
                                                <td>2241</td>
                                                <td>4.9%</td>
                                                <td>2:20</td>
                                                <td>48.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-twitter text-primary mr-1 font-18"></i>Twitter</td>
                                                <td>6806</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>57.8%</td>
                                                <td>-11.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-linkedin text-info mr-1 font-18"></i>LinkedIn</td>
                                                <td>4541</td>
                                                <td>3.2%</td>
                                                <td>3:20</td>
                                                <td>52.8%</td>
                                                <td>17.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-pinterest text-pink mr-1 font-18"></i>Pinterest</td>
                                                <td>3542</td>
                                                <td>8.2%</td>
                                                <td>6:20</td>
                                                <td>61.8%</td>
                                                <td>23.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-google-plus text-danger mr-1 font-18"></i>Google+</td>
                                                <td>1124</td>
                                                <td>9.2%</td>
                                                <td>4:10</td>
                                                <td>20.8%</td>
                                                <td>-9.8% <i class="mdi mdi-arrow-down-drop-circle-outline text-danger ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-instagram text-success mr-1 font-18"></i>Instagram</td>
                                                <td>3521</td>
                                                <td>1.2%</td>
                                                <td>6:45</td>
                                                <td>66.2%</td>
                                                <td>34.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-whatsapp text-success mr-1 font-18"></i>WhatsApp</td>
                                                <td>96547</td>
                                                <td>9.2%</td>
                                                <td>1:20</td>
                                                <td>57.8%</td>
                                                <td>48.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td><i class="mdi mdi-google-play text-warning mr-1 font-18"></i>Other</td>
                                                <td>3214</td>
                                                <td>6.2%</td>
                                                <td>4:40</td>
                                                <td>36.8%</td>
                                                <td>11.8% <i class="mdi mdi-arrow-up-drop-circle-outline text-success ml-1"></i></td>
                                            </tr><!--end tr-->

                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div> <!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
                @endif
{{--                end section-content--}}
                <footer class="footer text-center text-sm-left">
                    &copy; 2024 App Spending <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Sweetsica</span>
                </footer>
            </div>
        <!-- end page content -->
    </div>
    <!--end page-wrapper-inner -->
</div>
<!-- end page-wrapper -->
@hasSection('js')
    @yield('js')
@else

    <script src="{{asset('assets/js/style.js')}}"></script>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="https://apexcharts.com/samples/assets/irregular-data-series.js')}}"></script>
    <script src="https://apexcharts.com/samples/assets/series1000.js')}}"></script>
    <script src="https://apexcharts.com/samples/assets/ohlc.js')}}"></script>

    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea-en.js')}}"></script>
    <!-- Required datatable js -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('assets/pages/jquery.dashboard-2.init.js')}}"></script>

    <!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
@endif
<!-- jQuery  -->


</body>
</html>
