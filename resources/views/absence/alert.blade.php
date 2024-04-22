<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Absence Stagiaire</title>
@include('layouts.header_links')

  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <style>
    .bg-warning-light {
        background-color: #ffcc0079; /* Light yellow color */
    }
    .bg-danger-light{
        background-color: #ff5656; /* Light yellow color */
    }
    .bg-primary-light{
        background-color: #295bffbf; /* Light yellow color */
    }
</style>
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
              <li class="breadcrumb-item"><a href="{{ route('absences.alert') }}">Alert</a></li>
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
    <!-- Alert Information -->
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Absence Alert
          </div>
          <div class="card-body">
            <div class="table ">
              <table id="dataTable" class="table table-bordered  table-striped">
                <thead>
                  <tr>
                    <th>Nom et Prénom</th>
                    <th>Group</th>
                    <th>Type Alert</th>
                    <th>Nombre d'absence Justifiées</th>
                    <th>Nombre d'absence Injustifiées</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($absenceNumbers as $absence)
                    <tr class="stagiaireRow">
                        <td>{{ $absence['nom'] }} {{ $absence['prenom'] }}</td>
                        <td>{{ $absence['group'] }}</td>
                        <td>
                            @if ($absence['unjustified'] > 40)
                                <div class="alert alert-danger bg-danger-light opacity-25" role="alert">
                                    Conseil de Discipline de {{ $absence['nom'] }}
                                  </div>
                            @elseif ($absence['unjustified'] > 20)
                                <div class="alert alert-warning alert-sm  bg-warning-light" role="alert">
                                    2eme avertissement de {{ $absence['nom'] }}
                                  </div>
                            @elseif ($absence['unjustified'] > 15)
                                <div class="alert alert-info alert-sm bg-primary-light" role="alert">
                                    avertissment Surveillance de {{ $absence['nom'] }}
                                </div>
                            @endif
                        </td>

                        <td>{{ $absence['justified'] }}</td>
                        <td>{{ $absence['unjustified'] }}</td>
                    </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->


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
  $(document).ready(function() {
    $('#dataTable').DataTable( );
  });
</script>
</body>
</html>
