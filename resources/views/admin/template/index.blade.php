<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. PRIJADI CAHAYA INDONESIA</title>
    <link rel="stylesheet" href="{{ asset('assets-admin/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-center">
                    <a href="./index.html" class="text-nowrap logo-img">
                        <img src="{{ asset('assets/images/logo.png') }}" width="100"
                            alt="" />
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-dashboard' ? 'active' : '' }}" href="{{ route('admin-dashboard') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Pages</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-about' ? 'active' : '' }}" href="{{ route('admin-about') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">About</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-user' ? 'active' : '' }}" href="{{ route('admin-user') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user-plus"></i>
                                </span>
                                <span class="hide-menu">User</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-product' ? 'active' : '' }}" href="{{ route('admin-product') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-box"></i>
                                </span>
                                <span class="hide-menu">Product</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-banner' ? 'active' : '' }}" href="{{ route('admin-banner') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-chalkboard"></i>
                                </span>
                                <span class="hide-menu">Banner</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-category' ? 'active' : '' }}" href="{{ route('admin-category') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-pin"></i>
                                </span>
                                <span class="hide-menu">Category</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-transaction' ? 'active' : '' }}" href="{{ route('admin-transaction') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-brand-cashapp"></i>
                                </span>
                                <span class="hide-menu">Transaction</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link {{ Route::currentRouteName() === 'admin-contact' ? 'active' : '' }}" href="{{ route('admin-contact') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-phone"></i>
                                </span>
                                <span class="hide-menu">Contact</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets-admin/images/user-1.jpg') }}" alt=""
                                        width="35" height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                @yield('content-admin')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets-admin/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets-admin/js/app.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets-admin/js/dashboard.js') }}"></script>
</body>

</html>
