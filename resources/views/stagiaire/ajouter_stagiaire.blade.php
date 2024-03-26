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
                        <a href="{{ route('list_demande') }}" class="dropdown-item dropdown-footer">See All
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
            <a href="#" class="brand-link">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
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

                        <!-- /.col -->
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item ">Dashboard </li>
                                <li class="breadcrumb-item"><a href="{{ route('stagiaires.index') }}">Stagiaires</a>
                                </li>
                                <li class="breadcrumb-item active"><a href="{{ route('stagiaires.create') }}">Ajouter
                                        Stagiaire</a></li>
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
                                        <h3 class="card-title">Ajouter Stagiaire</h3>

                                    </div>
                                </div>


                                <div>
                                    <form action="{{ route('stagiaires.store') }}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nom </label>
                                                        <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom"
                                                            id="" style="width: 100%;"> 
                                                        <div class="invalid-feedback">{{ $errors->first('nom') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Prenom </label>
                                                        <input class="form-control @error('prenom') is-invalid @enderror" type="text" name="prenom"
                                                            id="" style="width: 100%;"> 
                                                        <div class="invalid-feedback">{{ $errors->first('prenom') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Code Stagiaire</label>
<<<<<<< HEAD
                                                        <input type="password"  name="password"
                                                            class="form-control">
                                                        {{-- @error('registration_number')
                                                            <span
                                                                class="text-danger font-weight-bold small  ">{{ $errors->first('registration_number') }}</span>
                                                        @enderror --}}
=======
                                                        <input type="text"  name="registration_number"
                                                            class="form-control @error('registration_number') is-invalid @enderror"> 
                                                        <div class="invalid-feedback">{{ $errors->first('registration_number') }}</div>
>>>>>>> 911bb12282e43d49a409fd006a8b4f2aeb485737
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Email_etu</label>
                                                        <input type="email" name="email_etu" class="form-control @error('email_etu') is-invalid @enderror"> 
                                                        <div class="invalid-feedback">{{ $errors->first('email_etu') }}</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Stagiaire en formation</label>
                                                        <select name="stagaire_en_formation" class="form-control @error('stagaire_en_formation') is-invalid @enderror" style="width: 100%;">
                                                            <option value="" disabled selected>select </option>
                                                            <option value="oui">oui</option>
                                                            <option value="non">non</option>
                                                        </select> 
                                                        <div class="invalid-feedback">{{ $errors->first('stagaire_en_formation') }}</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Nationalite </label>
                                                        <input class="form-control @error('nationalite') is-invalid @enderror" type="text" name="nationalite"
                                                            id="" style="width: 100%;"> 
                                                        <div class="invalid-feedback">{{ $errors->first('nationalite') }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Groupe </label>
                                                        <select class="form-control @error('group_id') is-invalid @enderror" name="group_id" style="width: 100%;">
                                                            <option value="" disabled selected>Select group</option>
                                                            @foreach ($groups as $group)
                                                                <option value="{{ $group->id }}">{{ $group->code_group }}</option>
                                                            @endforeach
                                                        </select> 
                                                        <div class="invalid-feedback">{{ $errors->first('group_id') }}</div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Date_pv</label>
                                                        <input class="form-control" type="date" name="date_pv"
                                                            id="" style="width: 100%;">
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
                                <form action="{{ route('excel.stagiaire') }}" method="post" enctype="multipart/form-data"  >
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
