<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>stagiaire</title>
    @include('layouts.header_links')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
            <a href="#" class="brand-link">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar d-flex flex-column">
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
                         <!-- /.col -->
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{ route('stagiaires.index') }}">List stagiaire</a>
                                </li>
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
                                    <h3 class="card-title">list stagiaire</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="table_stagiaire" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                {{-- <th>Code stagiaire  </th> --}}
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th> Email etud </th>
                                                <th> Nationalite</th>
                                                <th>stagaire_en_formation</th>
                                                <th>show</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($stagiaires as $stagiaire)
                                                <tr>
                                                    {{-- <td>{{ $stagiaire->registration_number }}</td> --}}
                                                    <td>{{ $stagiaire->nom }}</td>
                                                    <td>{{ $stagiaire->prenom}}</td>
                                                    <td>{{ $stagiaire->email_etu }}</td>
                                                    <td>{{ $stagiaire->nationalite}}</td>
                                                    <td>{{ $stagiaire->stagaire_en_formation ? 'oui' : 'non' }}</td>
                                                    <td><a href="{{ route('stagiaires.details',["id"=>$stagiaire->id]) }}" class="btn   bg-purple">
                                                        <i class="fa-regular fa-eye"></i> info
                                                    </a></td>
                                                </tr>
                                            @endforeach

                                    </table>
                                </div>
                                <!-- /.card-body -->
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

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script>
        $(function() {
            $("#table_stagiaire").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
            });

        });
    </script>
</body>

</html>
