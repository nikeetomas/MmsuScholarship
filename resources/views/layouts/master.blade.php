
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="{{ asset('css/dataTables.min.css') }}"> -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-user"></i>
        </a>
        <!-- <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
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
        </div> -->
      </li>
     <!-- dropdown user -->
     <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: whitesmoke;">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('template/dist/img/icons.png') }}" alt="RRL Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold" style="color:#4682B4;">RRL Organizer</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        
      </div> -->

      <!-- SidebarSearch Form -->

      <nav class="mt-3 text-center">
      <button type="button" class="btn btn-outline-info">DRAFT RRL</button>
      </nav>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item mt-3">
            <a href="/admin" class="nav-link" style="color:#4682B4;">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item mt-3">
            <a href="/scholarship" class="nav-link {{ 'scholarship' == request()->path() ? 'active' : ''  }}"  style="color:#4682B4;">
              <i class="nav-icon fas fa-file"></i>
              
              <p>
                Files
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="/scholars" class="nav-link  {{ 'scholars' == request()->path() ? 'active' : ''  }}">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Student Records
              </p>
            </a>
          </li> -->
          

          <!-- <li class="nav-item">
            <a href="/scholarshipdeduction" class="nav-link {{ 'scholarshipdeduction' == request()->path() ? 'active' : ''  }}">
              <i class="nav-icon fas fa-folder-open"></i>
              <p>
                Scholarship Deductions
              </p>
            </a>
          </li> -->
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
         
        </div> -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('content')
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<!-- DataTable JS -->
<!-- <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/DataTables-1.10.24/js/jquery.dataTables.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/DataTables-1.10.24/js/dataTables.bootstrap4.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/Responsive-2.2.7/js/dataTables.responsive.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/Buttons-1.7.0/js/dataTables.buttons.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/JSZip-2.5.0/jszip.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/pdfmake-0.1.36/pdfmake.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/pdfmake-0.1.36/vfs_fonts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/Buttons-1.7.0/js/buttons.html5.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/Buttons-1.7.0/js/buttons.print.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('DataTables/DataTables-1.10.24/Buttons-1.7.0/js/buttons.colVis.min.js') }}"></script> -->

  <!-- DataTable CSS -->
  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.24/DataTables-1.10.24/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.24/Buttons-1.7.0/css/buttons.jqueryui.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.10.24/Responsive-2.2.7/css/responsive.dataTables.min.css') }}"> -->



<!-- <script src="{{ asset('template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script> -->
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/dist/js/demo.js') }}"></script>
<!-- Page specific script -->

@yield('scripts')
</body>
</html>
