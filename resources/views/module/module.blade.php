<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Absence Stagiaire</title>
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
          <a href="{{ route('list_demande') }}" class="dropdown-item dropdown-footer">See All Notifications</a>
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
              <li class="breadcrumb-item   "><a href="{{ route('info_module') }}">avancement</a></li> 
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
                    <label>Date debut module</label>
  
                    <div class="input-group">  
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                            <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                    </div> 
                  </div>
                  <div class="row">
                  <!-- /.col -->
                  <div class="col-md-6">
                    <div class="form-group">
                          <label>nombre séance  par semaine</label> 
                          <input class="form-control" type="number" value="3" name="" id="" style="width: 100%;">
                    </div>  
                  </div> 
                  
                  <!-- /.col -->
                  </div> 
                  <button type="submit" class="btn btn-primary">save</button>
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
<script>
     $(function () {   
        $('#reservationdate').datetimepicker({
        format: 'L'
    }); 
        });
</script>
<script>
  function willCompleteOnTime(startDate, endDate, weeklyStudyHours, totalHoursRequired) {
    // Split the dates into day, month, and year components
    const [startDay, startMonth, startYear] = startDate.split('/');
    const [endDay, endMonth, endYear] = endDate.split('/');
    
    // Create Date objects for the start and end dates
    const startDateObj = new Date(startYear, startMonth - 1, startDay); // Months are 0-indexed in JavaScript
    const endDateObj = new Date(endYear, endMonth - 1, endDay);
    
    // Calculate the difference in milliseconds between the two dates
    const timeDifference = Math.abs(endDateObj.getTime() - startDateObj.getTime());
    
    // Convert the difference to weeks
    const weeksDifference = Math.ceil(timeDifference / (1000 * 60 * 60 * 24 * 7));
    
    // Calculate the total hours available for studying
    const totalStudyHours = weeksDifference * weeklyStudyHours;
    
    // Determine if the total study hours are sufficient to complete the program on time
    const willCompleteOnTime = totalStudyHours >= totalHoursRequired;
    
    return   willCompleteOnTime;
}

// Example usage:
const startDate = '20/03/2024';
const endDate = '20/04/2024';
const weeklyStudyHours = 10;
const totalHoursRequired = 40;

const completionStatus = willCompleteOnTime(startDate, endDate, weeklyStudyHours, totalHoursRequired);
console.log(`Will complete on time: ${completionStatus}`);

</script>
</body>
</html>
