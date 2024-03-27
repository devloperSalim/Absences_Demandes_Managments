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
            <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60"
                width="60">
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
            <a href="#" class="brand-link">
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
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item ">Dashboard </li>
                                <li class="breadcrumb-item"><a href="{{ route('groups.index') }}">Groupes</a></li>
                                <li class="breadcrumb-item active"><a href="{{ route('groups.create') }}">Ajouter
                                        Groupe</a></li>
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
                                <!-- /.card-header -->
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h3 class="card-title">Ajouter Group</h3>

                                    </div>
                                </div>
                                <!-- /.card-header -->

                                <div>
                                    <form action="{{ route('groups.store') }}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Code group</label>
                                                        <input
                                                            class="form-control @error('code_group') is-invalid @enderror"
                                                            type="text" name="code_group" id=""
                                                            style="width: 100%;">

                                                        <div class="invalid-feedback">{{ $errors->first('code_group') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>annee formation</label>
                                                        <input
                                                            class="form-control @error('anne_formation') is-invalid @enderror"
                                                            type="date" name="anne_formation" id=""
                                                            style="width: 100%;" placeholder="0000-0000">
                                                            <div class="invalid-feedback">{{ $errors->first('anne_formation') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>fillier</label>
                                                        <input
                                                            class="form-control @error('nom_ilière') is-invalid @enderror"
                                                            type="text" name="nom_ilière" id=""
                                                            style="width: 100%;">

                                                        <div class="invalid-feedback">{{ $errors->first('nom_ilière') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>nombre stagiaire</label>
                                                        <input
                                                            class="form-control @error('nbr_stagiaires') is-invalid @enderror"
                                                            type="number" name="nbr_stagiaires" id=""
                                                            style="width: 100%;">
                                                        <div class="invalid-feedback">{{ $errors->first('nbr_stagiaires') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                </div>
                            </div>
                            </form>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <form action="{{ route('excel.group') }}" method="post" enctype="multipart/form-data"  >
                                    @csrf
                                     <div class="mb-3">
                                    <label class="form-label" for="excel_file">Select Excel file:</label>
                                    <input type="file" class="form-control @error('excel_file') is-invalid @enderror" id="excel_file" name="excel_file" accept=".xls,.xlsx"  >
                                    <div class="invalid-feedback">Please select an Excel file.</div>
                                  </div>
                                  <button type="submit" class="btn btn-primary">Upload Excel</button>
                                </form>
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
    @include('layouts.footerjs')
</body>

</html>
