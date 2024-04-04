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
                        <div class="row col-12 col-md-12 col-lg-6">
                            <div class="info-box h-auto align-items-start col-12"> 
                                <div class="info-box-content mt-2">
                                    <table>
                                        <tr>
                                            <th><b>nom et prenom</b></th>
                                        <td>:   "name prenom"</td>
                                        </tr>
                                        <tr>
                                            <th><b>nom filliere </b></th>
                                        <td>:   "nom filleir"</td>
                                        </tr>
                                        <tr>
                                            <th><b>email_etu </b></th>
                                        <td>:   "email_etu"</td>
                                        </tr>
                                        <tr>
                                            <th>password</th>
                                        <td>: "password"</td>
                                        </tr>  

                                        <tr>
                                            <th>code_group</th>
                                        <td>: "code_group"</td>
                                        </tr> 
                                    </table>
                                </div>
                            </div> 
                        </div>


                    <div class="info-box col-12 col-md-12 col-lg-6">
                        <div class="card-body"> 
                                <form action="" method="post" class="col-md-12">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nom:</label>
                                        <input type="text" class="form-control">
                                        @error('nom')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('nom') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">Prenom:</label>
                                        <input type="text" class="form-control">
                                        @error('prenom')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('prenom') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="filliere">nom fillieire:</label>
                                        <input type="text" class="form-control">
                                        @error('filliere')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('filliere') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email:</label>
                                        <input type="email" class="form-control">
                                        @error('Email')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('Email') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control">
                                        @error('password')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('password') }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Email">Email:</label>
                                        <input type="email" class="form-control">
                                        @error('Email')
                                            <span
                                                class="text-danger font-weight-bold small  ">{{ $errors->first('Email') }}</span>
                                        @enderror
                                    </div>
                                     

                                       
                                    <div class="row">
                                         
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
