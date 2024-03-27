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
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li> 
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto"> 
 
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
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="{{ route('demandes.index') }}" class="dropdown-item dropdown-footer">See All Notifications</a>
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
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
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
          <div class="col-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    
                    <!--MDB Tables--> 
                        <div class="card mb-4">
                            <div class="card-body">
                                <!-- Grid row -->
                                <div class="row">
                                    <!-- Grid column -->
                                    <div class="col-md-12">
                                        <h2 class="  pb-4   font-bold font-up deep-purple-text">List modules</h2>
                                        <div class="input-group md-form form-sm form-2  ">
                                            <input class="form-control my-0 py-1 pl-3 purple-border" id="searchinput" type="text" placeholder="Search something here..." aria-label="Search"> 
                                        </div>
                                    </div>
                                    <!-- Grid column -->
                                </div>
                                <!-- Grid row -->
                                <!--Table-->
                                <table class="table table-striped" id="example">
                                    <!--Table head-->
                                    <thead>
                                        <tr>
                                            <th>Code Module</th>
                                            <th>module</th>
                                            <th>nombre horaire</th>
                                            <th>Régional</th>
                                            <th>MH Presentiel</th>
                                            <th>MH distanciel</th>
                                            <th>more</th>
                                        </tr>
                                    </thead>
                                    <!--Table head-->
                                    <!--Table body-->
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Oui</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td><a href="{{ route('info_module') }}" class="btn   bg-purple">
                                                    <i class="fa-regular fa-eye"></i> 
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>Oui</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td><a href="{{ route('info_module') }}" class="btn   bg-purple">
                                                    <i class="fa-regular fa-eye"></i> 
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Non</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td><a href="{{ route('info_module') }}" class="btn   bg-purple">
                                                    <i class="fa-regular fa-eye"></i> 
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Non</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td><a href="{{ route('info_module') }}" class="btn   bg-purple">
                                                    <i class="fa-regular fa-eye"></i> 
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>Oui</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td><a href="{{ route('info_module') }}" class="btn   bg-purple">
                                                    <i class="fa-regular fa-eye"></i> 
                                                </a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>Non</td>
                                            <td>12</td>
                                            <td>12</td>
                                            <td><a href="{{ route('info_module') }}" class="btn   bg-purple">
                                                    <i class="fa-regular fa-eye"></i> 
                                                </a></td>
                                        </tr>
                                    </tbody>
                                    <!--Table body-->
                                </table>
                                <!--Table-->
                            </div>  
                      
                        <hr class="my-4">
                       
            
                    </div>
                    <!--MDB Tables-->
                    
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

@extends('layouts.footerjs') 
<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get references to the input element and the table
      var searchInput = document.getElementById("searchinput");
      var dataTable = document.getElementById("example");
      var tableRows = dataTable.getElementsByTagName("tr");
    
      // Add event listener for keyup event on the search input
      searchInput.addEventListener("keyup", function() {
        var searchText = searchInput.value.toLowerCase();
    
        // Loop through all table rows and hide those that do not match the search query
        for (var i = 1; i < tableRows.length; i++) { // Start from index 1 to skip header row
          var rowData = tableRows[i].getElementsByTagName("td");
          var rowMatch = false;
          
          for (var j = 0; j < rowData.length; j++) {
            var cellData = rowData[j].textContent.toLowerCase();
            if (cellData.indexOf(searchText) > -1) {
              rowMatch = true;
              break;
            }
          }
    
          if (rowMatch) {
            tableRows[i].style.display = "";
          } else {
            tableRows[i].style.display = "none";
          }
        }
      });
    });
 </script>
</body>
</html>
