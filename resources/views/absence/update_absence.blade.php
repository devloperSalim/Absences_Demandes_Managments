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
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{ $demandes->count()  }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">{{ $demandes->count() }} Demandes</span>
                <div class="dropdown-divider"></div>
                @foreach ($demandes as $demande)
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> {{ $demande->stagiaire->nom }} {{ $demande->stagiaire->prenom }}
                    <span class="float-right text-muted text-sm">{{ $demande->created_at->diffForHumans() }}</span>
                </a>
                <div class="dropdown-divider"></div>
                @endforeach
                <a href="{{ route('demandes.index') }}" class="dropdown-item dropdown-footer">See All Demandes</a>
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
    @include('layouts.sidebar')
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
              <li class="breadcrumb-item   "><a href="{{ route('stagiaire_absence') }}">absence</a></li>
              <li class="breadcrumb-item"><a href="{{ route('list_stagiaire') }}">stagiaire</a></li>
              <li class="breadcrumb-item">Dashboard </li>
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
        </div>

      </div><!-- /.container-fluid -->
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
