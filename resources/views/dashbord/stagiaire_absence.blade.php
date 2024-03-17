<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Absence Stagiaire</title>
@include('layouts.header_links')

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
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
              <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="{{ asset('dist/img/user8-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="{{ asset('dist/img/user3-128x128.jpg') }}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
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
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
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
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active "><a href="{{ route('stagiaire_absence') }}">absence</a></li>
              <li class="breadcrumb-item"><a href="{{ route('list_stagiaire') }}">stagiaire</a></li>
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
            <div class="info-box col-12">
                <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Nom & prenom</span>
                  <span class="info-box-number">41 absence</span>
                  <div class="progress">
                    <div class="progress-bar bg-info" style="width: 70%"></div>
                  </div>
                  <span class="description">
                    last absence 12/04/2024
                  </span>
                </div>
              </div>
        </div>
        <div class="info-box col-12"> 
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                         <!-- Date and time range -->
                <div class="form-group">
                    <label>Date absence:</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text"   class="form-control float-right" id="reservationtime">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                    </div>
                    <!-- /.form-group -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Type Absence</label>    
                            <select class="form-control select2" style="width: 100%;"> 
                                <option></option>
                                <option>Justifie</option>
                                <option>Injustifie</option> 
                              </select>
                        </div>  
                      </div>
                    <!-- /.form-group -->
                  </div>
                  <div class="row">
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                          <label>nombre séance  </label> 
                          <input class="form-control" type="number" name="" id="" style="width: 100%;">
                    </div>  
                  </div>
                  <!-- /.col --> 
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>nombre horaire </label> 
                      <input class="form-control" type="number" name="" id="" style="width: 100%;">
                    </div>  
                  </div> 
                  
                  <!-- /.col -->
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>Groupe </label>  
                          <select class="form-control" style="width: 100%;">
                            <option >GES102</option>
                            <option>GES102</option> 
                            <option>GES201</option>
                            <option>DEV101</option>
                            <option>DEV102</option>
                            <option>DEV202</option>
                          </select>
                        </div>  
                      </div>
                    <div class="col-md-6">
                        <div class="form-group">
                          <label>code stagiaire</label> 
                          <input class="form-control" type="text" name="" id="" style="width: 100%;">
                        </div>  
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
                <!-- /.row -->
              </div>
            <!-- /.card-body -->
              
        <!-- /.card-body -->
      </div>
      <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">list absences Nom & prenom</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table_stagiaire" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>nombre séance</th>
                                <th>nombre horaire</th>
                                <th>Type Absence </th> 
                                <th>show</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gecko</td>
                                <td>Camino 1.5</td>
                                <td>OSX.3+</td> 
                                <td>
                                    <a href="{{ route('update_absence') }}" class="btn   bg-purple">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Netscape 7.2</td>
                                <td>Win 95+ / Mac OS 8.6-9.2</td> 
                                <td><a href="{{ route('stagiaire_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Netscape Browser 8</td>
                                <td>Win 98SE+</td> 
                                <td><a class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                    </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Netscape Navigator 9</td>
                                <td>Win 98+ / OSX.2+</td> 
                                <td><a href="{{ route('update_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.0</td>
                                <td>Win 95+ / OSX.1+</td> 
                                <td><a href="{{ route('stagiaire_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.1</td>
                                <td>Win 95+ / OSX.1+</td> 
                                <td><a href="{{ route('update_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.2</td>
                                <td>Win 95+ / OSX.1+</td> 
                                <td><a href="{{ route('update_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.3</td>
                                <td>Win 95+ / OSX.1+</td> 
                                <td><a href="{{ route('update_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.4</td>
                                <td>Win 95+ / OSX.1+</td> 
                                <td><a href="{{ route('update_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>
                            <tr>
                                <td>Gecko</td>
                                <td>Mozilla 1.5</td>
                                <td>Win 95+ / OSX.1+</td> 
                                <td><a href="{{ route('update_absence') }}" class="btn   bg-purple">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a></td>
                            </tr>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
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

@extends('layouts.footerjs') 
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script> 
    <!-- InputMask -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script> 
<script>
     $(function () { 
    //Initialize Select2 Elements
    $('.select2').select2();


        $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
            });
</script>
</body>
</html>