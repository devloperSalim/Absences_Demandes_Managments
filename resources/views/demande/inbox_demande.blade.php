<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
@include('layouts.header_links')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script> 
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
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
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
          <div class="col-sm-6">
            <h1 class="m-0">Demandes list</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('list_demande') }}">Demandes</a></li>
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
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Inbox</h3>
      
                    <div class="card-tools">
                      <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Search Mail" id="searchinput">
                        <div class="input-group-append">
                          <div class="btn btn-primary">
                            <i class="fas fa-search"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <div class="mailbox-controls">
                      <!-- Check all button -->
                      <button type="button" class="btn btn-default btn-sm btn-delete">
                          <i class="far fa-trash-alt"></i> Delete
                      </button>
                      <!-- /.btn-group -->
                      <button type="button" class="btn btn-default btn-sm" id="refreshButton">
                          <i class="fas fa-sync-alt"></i>
                      </button>
                      <button type="button" class="btn btn-success btn-sm" id="acceptButton">
                          <i class="fas fa-check"></i> Accept
                      </button>
                      <button type="button" class="btn btn-danger btn-sm" id="refuseButton">
                          <i class="fas fa-times"></i> Refuse
                      </button>
                  </div>
                    <div class="table-responsive mailbox-messages">
                      <table class="table table-hover table-striped" id="example">
                        <thead>
                            <tr>
                              <th>
                                <button type="button" class="btn btn-default btn-sm checkbox-toggle"> <i class="far fa-square"></i>
                              </button>
                            </th>
                              <th>id</th>
                              <th>Type </th>
                              <th>description </th>
                              <th>Status</th>
                              <th>time</th>
                            </tr>
                          </thead>
                        <tbody>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="1" id="check1">
                              <label for="check1"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><span class="badge rounded-pill bg-primary">en cour</span></td>
                          <td class="mailbox-date">5 mins ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="2" id="check2">
                              <label for="check2"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><span class="badge rounded-pill bg-success">Success</span></td>
                          <td class="mailbox-date">28 mins ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check3">
                              <label for="check3"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><span class="badge rounded-pill bg-warning text-dark">Warning</span></td>
                          <td class="mailbox-date">11 hours ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check4">
                              <label for="check4"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"></td>
                          <td class="mailbox-date">15 hours ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check5">
                              <label for="check5"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                          <td class="mailbox-date">Yesterday</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check6">
                              <label for="check6"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                          <td class="mailbox-date">2 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check7">
                              <label for="check7"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                          <td class="mailbox-date">2 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check8">
                              <label for="check8"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"></td>
                          <td class="mailbox-date">2 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check9">
                              <label for="check9"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"></td>
                          <td class="mailbox-date">2 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check10">
                              <label for="check10"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"></td>
                          <td class="mailbox-date">2 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check11">
                              <label for="check11"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                          <td class="mailbox-date">4 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check12">
                              <label for="check12"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"></td>
                          <td class="mailbox-date">12 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check13">
                              <label for="check13"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                          <td class="mailbox-date">12 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check14">
                              <label for="check14"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                          <td class="mailbox-date">14 days ago</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="icheck-primary">
                              <input type="checkbox" value="" id="check15">
                              <label for="check15"></label>
                            </div>
                          </td>
                          <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                          <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                          <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                          </td>
                          <td class="mailbox-attachment"><i class="fas fa-paperclip"></i></td>
                          <td class="mailbox-date">15 days ago</td>
                        </tr>
                        </tbody>
                      </table>
                      <!-- /.table -->
                    </div>
                    <!-- /.mail-box-messages -->
                  </div>
                  <!-- /.card-body -->
                 
                </div>
                <!-- /.card -->
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
 

<script>
    document.addEventListener("DOMContentLoaded", function() {
      // Get references to the input element and the table
      var searchInput = document.getElementById("searchinput");
      var dataTable = document.getElementById("example");
      var tableRows = dataTable.getElementsByTagName("tr");
    
      // Add event listener for keyup event on the search input
      searchInput.addEventListener("keyup", function() {
        var searchText = searchInput.value.toLowerCase();
    
        // Loop through all table rows and hide those that do not match the search query
        for (var i = 1; i < tableRows.length; i++) { // Start from index 1 to skip header row
          var rowData = tableRows[i].getElementsByTagName("td");
          var rowMatch = false;
          
          for (var j = 0; j < rowData.length; j++) {
            var cellData = rowData[j].textContent.toLowerCase();
            if (cellData.indexOf(searchText) > -1) {
              rowMatch = true;
              break;
            }
          }
    
          if (rowMatch) {
            tableRows[i].style.display = "";
          } else {
            tableRows[i].style.display = "none";
          }
        }
      });
    });
 </script>
 <script> 
    $(document).ready(function() {
        // Handle checkbox toggle
            $('.checkbox-toggle').click(function() {
        var checkboxes = $('input[type="checkbox"]:visible');
        checkboxes.prop('checked', !checkboxes.prop('checked'));
    });
    
        // Handle delete button click
        $('.btn-delete').click(function() {
            var selectedCheckboxes = $('input[type="checkbox"]:checked');
            var selectedIds = [];
            selectedCheckboxes.each(function() {
                selectedIds.push($(this).val().replace('check', ''));
            });
         console.log(selectedIds);
            // Send AJAX request to delete the selected items
            $.ajax({
                url: '/delete-items',
                type: 'POST',
                data: {
                    ids: selectedIds
                },
                success: function(response) {
                    // Reload the page or update the table as needed
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
    </script>
    <script>
        // Add event listener for the refresh button
        document.getElementById('refreshButton').addEventListener('click', function() {
            // Reload the page
            location.reload();
        });
    </script>
    <script>
      $(document).ready(function () {
          // Function to handle the Accept button click

          $("#acceptButton").click(function () {
            var selectedCheckboxes = $('input[type="checkbox"]:checked');
            var selectedIds = [];
            selectedCheckboxes.each(function() {
                selectedIds.push($(this).val().replace('check', ''));
            });
            console.log(selectedIds);
              // Perform action for accepting selected items
              alert("Accepting selected items...");
          });

          // Function to handle the Refuse button click
          $("#refuseButton").click(function () {
            var selectedCheckboxes = $('input[type="checkbox"]:checked');
            var selectedIds = [];
            selectedCheckboxes.each(function() {
                selectedIds.push($(this).val().replace('check', ''));
            });
            console.log(selectedIds);
              // Perform action for refusing selected items
              alert("Refusing selected items...");
          });
      });
  </script>
</body>
</html>
