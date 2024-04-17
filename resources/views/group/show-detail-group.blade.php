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
            @include('layouts.sidebar')
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

            <section class="content">
                <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                      <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">{{ $group->code_group }}</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                              <thead>
                              <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Stagiaire_en_formation</th>
                                <th>Nationalite</th>
                                <th>Ajouter un Absence</th>
                                <th>Show All Absence</th>
                              </tr>
                              </thead>
                              <tbody>
                                @foreach ($stagiaires as $stagiaire)
                                <tr>
                                    <td>{{ $stagiaire->nom }}</td>
                                    <td>{{ $stagiaire->prenom }}</td>
                                    <td>{{ $stagiaire->stagaire_en_formation ? 'oui' : 'non' }}</td>
                                    <td>{{ $stagiaire->nationalite }}</td>
                                    <td>
                                        <a href="{{ route('absences.create',['stagiaire_id' => $stagiaire->id]) }}" class="btn btn-app">
                                        <span class="badge bg-purple">{{ $stagiaire->absences->sum('nbr_hour') }}</span>
                                        <i class="fas fa-calendar-minus"></i>  ajouter absence
                                      </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('stagiaires.show',$stagiaire->id) }}" class="btn btn-app">
                                        <i class="fas fa-calendar-minus"></i>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>


                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                  </div>
                  </div>
                </div><!-- /.container-fluid -->
              </section>

    </div>
    <!-- /.content-wrapper -->
    

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('layouts.footerjs')
    <script> 
        $(document).ready(function() {
          $('#example1').DataTable({
            "lengthMenu": [10, 25, 50, 75, 200],
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
            });
            });
           </script>
</body>

</html>
