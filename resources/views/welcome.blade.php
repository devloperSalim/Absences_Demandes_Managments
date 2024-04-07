<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    @include('layouts.header_links')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
            
            transition: background-color 0.5s ease; /* Smooth transition for background color */
        }
        .header { 
            width: 100%; 
            padding: 10px 0;   
            background: rgba(243, 243, 243, 0.263);
            backdrop-filter: blur(8px);
        }
         
        .header a { 
            text-decoration: none;
            
            color: #fff;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s ease; /* Smooth transition for color change */
        }
        .header a:hover {
            color: #757575;  
        }
        .main-content { 
            text-align: center;  
            color: #fff;  
            height: calc(100% - 100px); /* Subtract header height */
            display: flex;
            justify-content: center;
        }
        .main-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            transition: font-size 0.5s ease; /* Smooth transition for font size change */
            animation: changeFontSize 5s infinite alternate; /* Animate font size change */
        }
        
        .main-content p {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }
        .footer {
            position: fixed;
            bottom: 0;
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

    
 
  
  
  @media (min-width: 769px) {
    .typewriter { 
    overflow: hidden;   
    white-space: nowrap;  
    margin: 0 auto; 
    letter-spacing: .15em;  
    animation: typewriter 2s steps(8) infinite;  
  }
    .typewriter h1 { 
    border-right: 3px solid rgb(243, 243, 243);
  }

  .typewriter:nth-child(2) {
    animation: typewriter 4s steps(10) infinite;  
  }
  .typewriter p { 
    border-right: 3px solid rgb(243, 243, 243);
  }
  }
 /*  typewriter animation */
 @keyframes typewriter {
    from {
      width: 0;  
    }
    to {
      width: 100%;  
    }
  }
    </style>
</head>
<body>
    <div class="header"> 
                <div class="ml-4"> 
                        <a href="{{ route('login_form') }}">Log in</a> 
                </div>
    </div>
    <div class="main-content">
        <div class="w-full">
           <div class="typewriter">
            <h2 >Welcome to ISTA</h2>
           </div>
              
        <div class="typewriter">
            <p>Institut Spécialisé de Technologie Appliquée_Cité de l'air El Jadida</p>
        </div>
        </div>
    </div>
    <div class="footer">
        <a href="https://portfolio-salim.web.app"><i class="fas fa-external-link-alt"></i> salim</a>
        <a href="https://github.com/devloperSalim"><i class="fab fa-github"></i> salim</a>
        <a href="https://github.com/LahciniAbdelhaq"><i class="fab fa-github"></i>Abdelhaq</a> 
        <p>&copy; 2024 ISTA | Cité de l'air El Jadida | by Salim and abdelahq</p>
    </div>
 
</body>
</html>
