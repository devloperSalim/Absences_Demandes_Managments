<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @include('layouts.header_links')
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            width: 100%;
            background-image: url('https://lh3.googleusercontent.com/p/AF1QipNGIIr0412rAUGYHIG2bEzqM5jcF7-NQrzsKWeA=s1360-w1360-h1020');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Full viewport height */
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
.nav-item:hover{
  background: rgba(226, 226, 226, 0.285);
  color: #4f4f4f;
}
        .welcome-message {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            max-width: 600px;
            margin: auto;
        }
        .welcome-message p {
            margin-top: 20px;
            font-size: 1.2rem;
            color: #666;
        }
        .title {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #333;
            transition: color 0.3s ease;
        }
    </style>
</head>
<body>
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
                        @if (Route::has('login'))
                        @auth
                            <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
                      </li>
                  </ul>
                  <ul class="navbar-nav ml-auto"> <!-- Align logout link to the right -->
                      <li class="nav-item">
                        
                        @else
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Log in</a>
                        </li>
                        <li>
                            @if (Route::has('register'))
                                <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
                            @endif
                        </li>
                        @endauth
                    @endif
                     
                  </ul>
              </div>
            </div>
        </nav>
        <!-- Navbar -->
    </header>
    {{-- <div class="header">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Log in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div> --}}

    <div class="welcome-message">
        <h1 class="title">Welcome, Admin!</h1>
        <p>Feel free to explore our platform.</p>
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
