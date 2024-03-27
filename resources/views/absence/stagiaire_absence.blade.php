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
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
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
                        <a href="{{ route('demandes.index') }}" class="dropdown-item dropdown-footer">See All
                            Notifications</a>
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
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar d-flex flex-column">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                            alt="User Image">
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
                                <li class="breadcrumb-item active "><a href="{{ route('absences.create') }}">absence</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('stagiaires.index') }}">stagiaire</a></li>
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
                                <span class="info-box-text">{{ $stagiaire->nom }} {{ $stagiaire->prenom }}</span>
                                <span class="info-box-number">{{ $count }} absence</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" style="width: 70%"></div>
                                </div>
                                <span class="description">
                                    @if($absences->isNotEmpty()) 
                                    @php
                                            $lastAbsence = $absences->last();
                                    @endphp 
                                            last absence  
                                        {{ $lastAbsence->toDate }}
                                    @endif
                                  
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="info-box col-12">
                        <div class="card-body">
                            <div class="row">
                                <form action="{{ route('absences.store') }}" method="post" class="col-md-12">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fromDate">From Date:</label>
                                        <input type="datetime-local" class="form-control" id="fromDate"
                                            name="fromDate">
                                        @error('fromDate')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('fromDate') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="toDate">To Date:</label>
                                        <input type="datetime-local" class="form-control" id="toDate"
                                            name="toDate">
                                        @error('toDate')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('toDate') }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type Absence</label>
                                            <select class="form-control select2" style="width: 100%;"
                                                name="type_abs">
                                                <option></option>
                                                <option>Justifie</option>
                                                <option>Injustifie</option>
                                            </select>
                                            @error('type_abs')
                                                <span
                                                    class="text-danger font-weight-bold small  ">{{ $errors->first('type_abs') }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>nombre séance </label>
                                                <input class="form-control" type="number" name="nbr_seance"
                                                    style="width: 100%;">
                                                @error('nbr_seance')
                                                    <span
                                                        class="text-danger font-weight-bold small  ">{{ $errors->first('nbr_seance') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>nombre horaire </label>
                                                <input class="form-control" type="number" name="nbr_hour"
                                                    style="width: 100%;">
                                                @error('nbr_hour')
                                                    <span
                                                        class="text-danger font-weight-bold small  ">{{ $errors->first('nbr_hour') }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {{-- <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Groupe </label>
                                                <select class="form-control" style="width: 100%;" name="groupe">
                                                    <option>GES102</option>
                                                    <option>GES102</option>
                                                    <option>GES201</option>
                                                    <option>DEV101</option>
                                                    <option>DEV102</option>
                                                    <option>DEV202</option>
                                                </select>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>code stagiaire</label>
                                                <input readonly class="form-control" type="text"
                                                    name="stagiaire_id" value="{{ $stagiaire->id }}"
                                                    style="width: 100%;">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
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
        $(function() {
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
