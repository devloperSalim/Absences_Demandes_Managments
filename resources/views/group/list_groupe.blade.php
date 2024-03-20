<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title> 
  @include('layouts.header_links') 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                    class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar"
                            class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user8-128x128.jpg" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce
                                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user3-128x128.jpg" alt="User Avatar"
                            class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester
                                <span class="float-right text-sm text-warning"><i
                                        class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>
</nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Maryem</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        @include('layouts.SidebarMenu')
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Groupes</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">  
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All Groupes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>code groupe</th>
                      <th>Nom Groupe</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>show</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 4.0
                      </td>
                      <td>Win 95+</td>
                      <td> 4</td>
                      <td>
                        <a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a>
                    </td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.0
                      </td>
                      <td>Win 95+</td>
                      <td>5</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 5.5
                      </td>
                      <td>Win 95+</td>
                      <td>5.5</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet
                        Explorer 6
                      </td>
                      <td>Win 98+</td>
                      <td>6</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>Internet Explorer 7</td>
                      <td>Win XP SP2+</td>
                      <td>7</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Trident</td>
                      <td>AOL browser (AOL desktop)</td>
                      <td>Win XP</td>
                      <td>6</td>
                      <td><a class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.7</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 1.5</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td><a class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 2.0</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Firefox 3.0</td>
                      <td>Win 2k+ / OSX.3+</td>
                      <td>1.9</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.0</td>
                      <td>OSX.2+</td>
                      <td>1.8</td>
                      <td><a href="{{ route('list_stagiaire') }}" class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fas fa-users"></i> stagieaire
                      </a></td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Camino 1.5</td>
                      <td>OSX.3+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape 7.2</td>
                      <td>Win 95+ / Mac OS 8.6-9.2</td>
                      <td>1.7</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Browser 8</td>
                      <td>Win 98SE+</td>
                      <td>1.7</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Netscape Navigator 9</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.0</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.1</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.1</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.2</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.2</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.3</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.3</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.4</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.4</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.5</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.5</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.6</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>1.6</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.7</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td>1.7</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Mozilla 1.8</td>
                      <td>Win 98+ / OSX.1+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Seamonkey 1.1</td>
                      <td>Win 98+ / OSX.2+</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Gecko</td>
                      <td>Epiphany 2.20</td>
                      <td>Gnome</td>
                      <td>1.8</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Webkit</td>
                      <td>Safari 1.2</td>
                      <td>OSX.3</td>
                      <td>125.5</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Webkit</td>
                      <td>Safari 1.3</td>
                      <td>OSX.3</td>
                      <td>312.8</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Webkit</td>
                      <td>Safari 2.0</td>
                      <td>OSX.4+</td>
                      <td>419.3</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Webkit</td>
                      <td>Safari 3.0</td>
                      <td>OSX.4+</td>
                      <td>522.1</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Webkit</td>
                      <td>OmniWeb 5.5</td>
                      <td>OSX.4+</td>
                      <td>420</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Webkit</td>
                      <td>iPod Touch / iPhone</td>
                      <td>iPod</td>
                      <td>420.1</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Webkit</td>
                      <td>S60</td>
                      <td>S60</td>
                      <td>413</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 7.0</td>
                      <td>Win 95+ / OSX.1+</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 7.5</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 8.0</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 8.5</td>
                      <td>Win 95+ / OSX.2+</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 9.0</td>
                      <td>Win 95+ / OSX.3+</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 9.2</td>
                      <td>Win 88+ / OSX.3+</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera 9.5</td>
                      <td>Win 88+ / OSX.3+</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Opera for Wii</td>
                      <td>Wii</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Nokia N800</td>
                      <td>N800</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Presto</td>
                      <td>Nintendo DS browser</td>
                      <td>Nintendo DS</td>
                      <td>8.5</td>
                      <td>C/A<sup>1</sup></td>
                    </tr>
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.1</td>
                      <td>KDE 3.1</td>
                      <td>3.1</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.3</td>
                      <td>KDE 3.3</td>
                      <td>3.3</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>KHTML</td>
                      <td>Konqureror 3.5</td>
                      <td>KDE 3.5</td>
                      <td>3.5</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Tasman</td>
                      <td>Internet Explorer 4.5</td>
                      <td>Mac OS 8-9</td>
                      <td>-</td>
                      <td>X</td>
                    </tr>
                    <tr>
                      <td>Tasman</td>
                      <td>Internet Explorer 5.1</td>
                      <td>Mac OS 7.6-9</td>
                      <td>1</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>Tasman</td>
                      <td>Internet Explorer 5.2</td>
                      <td>Mac OS 8-X</td>
                      <td>1</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>Misc</td>
                      <td>NetFront 3.1</td>
                      <td>Embedded devices</td>
                      <td>-</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>Misc</td>
                      <td>NetFront 3.4</td>
                      <td>Embedded devices</td>
                      <td>-</td>
                      <td>A</td>
                    </tr>
                    <tr>
                      <td>Misc</td>
                      <td>Dillo 0.8</td>
                      <td>Embedded devices</td>
                      <td>-</td>
                      <td>X</td>
                    </tr>
                    <tr>
                      <td>Misc</td>
                      <td>Links</td>
                      <td>Text only</td>
                      <td>-</td>
                      <td>X</td>
                    </tr>
                    <tr>
                      <td>Misc</td>
                      <td>Lynx</td>
                      <td>Text only</td>
                      <td>-</td>
                      <td>X</td>
                    </tr>
                    <tr>
                      <td>Misc</td>
                      <td>IE Mobile</td>
                      <td>Windows Mobile 6</td>
                      <td>-</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>Misc</td>
                      <td>PSP browser</td>
                      <td>PSP</td>
                      <td>-</td>
                      <td>C</td>
                    </tr>
                    <tr>
                      <td>Other browsers</td>
                      <td>All others</td>
                      <td>-</td>
                      <td>-</td>
                      <td>U</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                      <th>Code Groupe</th>
                      <th>Nom Groupe</th>
                      <th>Platform(s)</th>
                      <th>Engine version</th>
                      <th>CSS grade</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div> 
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#">ISTA CITY DE L'AIR</a>.</strong>
    All rights reserved.
     
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script> 
@include('layouts.footerjs') 
  
    
   <script>
    document.addEventListener("DOMContentLoaded", function() {
    var dataTable = new DataTable("#example1", {
        responsive: true,
        lengthChange: true,
        autoWidth: false
    });
});
      //  $(function() {
      //      $("#example1").DataTable({
      //          "responsive": true,
      //          "lengthChange": true,
      //          "autoWidth": false,  
      //      });

      //  });
   </script>
</body>
</html>
