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

.footer {  
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .footer a {
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease;  
        }
        .footer a:hover {
            color: #757575; 
        }
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
    <header class="">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg   position-sticky sticky-top top-0 z-100 navbar-scroll  ">
            <div class="container-fluid ml-3">
                <a class="navbar-brand" href="">ISTA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('demandes.show', [Auth::guard('stagiaire')->user()->id]) }}">My Demandes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('logout.stagiaire') }}">Logout</a>

                      </li>
                  </ul>
                  <ul class="navbar-nav ml-auto"> <!-- Align logout link to the right -->
                      <li class="nav-item">

                      </li>
                  </ul>
              </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>

    <div  class="section d-flex justify-content-center align-items-center " >
        <div class="section-center ">
            <div class="container ">
                <div class="row">
                    <div class="col-lg-4 col-12 col-md-12  ">
                        <div class="booking-cta">
                            <h1>Thank You for Visiting!</h1>
                            <p class="text-light">We hope you enjoyed your experience on our website. Your feedback is
                                valuable to us. Please take a moment to share your thoughts with us.</p>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-offset-1 d-flex justify-content-center align-items-center">
                        <div class="booking-form">
                            <form id="bookingForm" action="{{ route('demandes.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <span class="form-label">choisir un demande</span>
                                            <select class="form-control select2" id="travelClass" name="type">
                                                <option value="" selected disabled>Choisir un demande</option>
                                                <option>Economy class</option>
                                                <option>Business class</option>
                                                <option>First class</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <span class="form-label">Additional Comments</span>
                                            <textarea class="form-control" id="comments" rows="4"
                                                placeholder="Enter any additional comments or notes" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="hidden" name="stagiaire_id" value="{{ Auth::guard('stagiaire')->user()->id }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <button type="submit" class="submit-btn">Demande Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="footer">
      <a href="https://portfolio-salim.web.app"><i class="fas fa-external-link-alt"></i> salim</a>
      <a href="https://github.com/devloperSalim"><i class="fab fa-github"></i> salim</a>
      <a href="https://github.com/LahciniAbdelhaq"><i class="fab fa-github"></i>Abdelhaq</a> 
      <p>&copy; 2024 ISTA | Cité de l'air El Jadida | by Salim and abdelahq</p>
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
