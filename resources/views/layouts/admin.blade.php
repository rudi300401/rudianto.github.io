<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta edit="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>


            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('header')</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- Brand Logo -->
                        <a href="index3.html" class="brand-link">
                            <img src="{{ asset('asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                                class="brand-image img-circle elevation-3" style="opacity: .8">
                            <span class="brand-text font-weight-light">PERPUSTAKAAN</span>
                        </a>

                        <!-- Sidebar -->
                        <div class="sidebar">
                            <!-- Sidebar user panel (optional) -->
                            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                                <div class="image">
                                    <img src="{{ asset('asset/dist/img/user2-160x160.jpg') }}"
                                        class="img-circle elevation-2" alt="User Image">
                                </div>
                                <div class="info">
                                    <a href="#" class="d-block">rudianto</a>
                                </div>
                            </div>

                            <!-- SidebarSearch Form -->
                            <div class="form-inline">
                                <div class="input-group" data-widget="sidebar-search">
                                    <input class="form-control form-control-sidebar" type="search"
                                        placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-sidebar">
                                            <i class="fas fa-search fa-fw"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {{--  side bar menu  --}}
                            <nav class="mt-2">
                                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
                                    role="menu" data-accordion="false">
                                    <li class="nav-item">
                                        <a href="{{ url('home') }}"
                                            class="nav-link {{ request()->is('home') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-tachometer-alt"></i>
                                            <p>
                                                Home
                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="{{ url('catalogs') }}"
                                            class="nav-link {{ request()->is('catalogs') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                Catalog
                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="{{ url('authors') }}"
                                            class="nav-link {{ request()->is('authors') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                Author
                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="{{ url('books') }}"
                                            class="nav-link {{ request()->is('books') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                Book
                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="{{ url('members') }}"
                                            class="nav-link {{ request()->is('members') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                Member
                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="{{ url('publishers') }}"
                                            class="nav-link {{ request()->is('publishers') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                publisher
                                            </p>
                                        </a>
                                    <li class="nav-item">
                                        <a href="{{ url('transactions') }}"
                                            class="nav-link {{ request()->is('transactions') ? 'active' : '' }}">
                                            <i class="nav-icon fas fa-edit"></i>
                                            <p>
                                                Transactions
                                            </p>
                                        </a>

                                        {{--  end side bar menu  --}}



                                        <!-- jQuery -->
                                        <script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
                                        <!-- jQuery UI 1.11.4 -->
                                        <script src="{{ asset('asset/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
                                        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                                        <script>
                                            $.widget.bridge('uibutton', $.ui.button)
                                        </script>
                                        <!-- Bootstrap 4 -->
                                        <script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                                        <!-- overlayScrollbars -->
                                        <script src="{{ asset('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
                                        <!-- AdminLTE App -->
                                        <script src="{{ asset('asset/dist/js/adminlte.js') }}"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
                                        @yield('js')

</body>
</html>
