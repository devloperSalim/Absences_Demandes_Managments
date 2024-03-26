<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Form HTML Template</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
     @include('layouts.header_links') 
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}" /> 
    <style>
        @media (max-width: 991px) {
  .navbar-scroll {
    background-color: #ffffff2b;
    backdrop-filter: blur(10px);
  }
     
  .navbar-scroll .navbar-brand,
  .navbar-scroll .nav-link,
  .navbar-scroll .fa-bars {
    color: #4f4f4f !important;
  }         
}

.navbar-brand {
  letter-spacing: 3px;
  font-size: 2rem;
  font-weight: 500;
}
.navbar-scroll .navbar-brand,
.navbar-scroll .nav-link,
.navbar-scroll .fa-bars {
  color: #fff;
}

.navbar-scroll {
  box-shadow: none;
  backdrop-filter: blur(10px);
}

.navbar-scrolled {
  box-shadow: 0 10px 20px 0 rgba(0, 0, 0, 0.05);
}

.navbar-scrolled .navbar-brand,
.navbar-scrolled .nav-link,
.navbar-scrolled .fa-bars {
  color: #4f4f4f;
}

.navbar-scrolled {
  background-color: #ffffff15;
}

@media (max-width: 450px) {
  #intro {
    height: 950px !important;
  }
}

@media (min-width: 550px) and (max-width: 750px) {
  #intro {
    height: 1100px !important;
  }
}

@media (min-width: 800px) and (max-width: 990px) {
  #intro {
    height: 600px !important;
  }
}

.display-1 {
  font-weight: 500 !important;
  letter-spacing: 40px;
}

@media (min-width: 1600px) {
  .display-1 {
    font-size: 10rem;
  }
}
    </style>
</head>

<body id="booking">
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-scroll sticky-top">
            <div class="container-fluid ml-3">
                <a class="navbar-brand" href="#!">ISTA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('mydemende') }}">my demandes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <div>
        <div>
            <div class="container">
                <div class="row justify-content-center"> 
                    <div class="col-md-11  "> 
                                <div class="card   card-outline">
                                    <div class="card-header">
                                        <a href="{{ route('demande') }}" class="btn btn-primary">ajoute demande</a> 
                                    </div>
                                    <div class="card-body p-0"> 
                                        <div class="table-responsive mailbox-messages">
                                          <table class="table table-hover table-striped" id="example">
                                            <thead>
                                                <tr> 
                                                  <th>id</th>
                                                  <th>Type </th>
                                                  <th>description </th>
                                                  <th>Status</th>
                                                  <th>time</th>
                                                </tr>
                                              </thead>
                                            <tbody>
                                            <tr> 
                                              <td class="mailbox-star"><a href="#"><i class="fas fa-star text-warning"></i></a></td>
                                              <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                              <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                              </td>
                                              <td class="mailbox-attachment"><span class="badge rounded-pill bg-primary">en cour</span></td>
                                              <td class="mailbox-date">5 mins ago</td>
                                            </tr>
                                            <tr>
                                               
                                              <td class="mailbox-star"><a href="#"><i class="fas fa-star-o text-warning"></i></a></td>
                                              <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                              <td class="mailbox-subject"><b>AdminLTE 3.0 Issue</b> - Trying to find a solution to this problem...
                                              </td>
                                              <td class="mailbox-attachment"><span class="badge rounded-pill bg-success">Success</span></td>
                                              <td class="mailbox-date">28 mins ago</td>
                                            </tr>
                                             
                                            </tbody>
                                          </table>
                                          <!-- /.table -->
                                        </div>
                                        <!-- /.mail-box-messages -->
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div> 

    <script>
        // JavaScript to toggle the menu on mobile screens
        document.addEventListener("DOMContentLoaded", function () {
            var navbarToggler = document.querySelector(".navbar-toggler");
            var navbarCollapse = document.querySelector(".navbar-collapse");

            navbarToggler.addEventListener("click", function () {
                navbarCollapse.classList.toggle("show");
            });
        });
    </script>
</body>

</html>
