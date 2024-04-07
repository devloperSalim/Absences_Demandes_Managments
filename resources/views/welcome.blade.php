<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
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
            background-image: url('https://lh3.googleusercontent.com/p/AF1QipNGIIr0412rAUGYHIG2bEzqM5jcF7-NQrzsKWeA=s1360-w1360-h1020');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Full viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: background-color 0.5s ease; /* Smooth transition for background color */
        }
        .header {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .header a {
            margin-left: 20px;
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s ease; /* Smooth transition for color change */
        }
        .header a:hover {
            color: #ff0000; /* Red color on hover */
        }
        .main-content {
            text-align: center;
            color: #fff;
            transition: color 0.5s ease; /* Smooth transition for color change */
        }
        .main-content h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            transition: font-size 0.5s ease; /* Smooth transition for font size change */
            animation: changeFontSize 5s infinite alternate; /* Animate font size change */
        }
        @keyframes changeFontSize {
            0% { font-size: 3rem; }
            100% { font-size: 5rem; }
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
            transition: color 0.3s ease; /* Smooth transition for color change */
        }
        .footer a:hover {
            color: #ff0000; /* Red color on hover */
        }
    </style>
</head>
<body>
    <div class="header">

                <a href="{{ route('login_form') }}">Log in</a>

    </div>
    <div class="main-content">
        <h1>Welcome to ISTA</h1>
        <p>Institut Spécialisé de Technologie Appliquée_Cité de l'air El Jadida</p>
    </div>
    <div class="footer">
        <a href=""><i class="fab fa-github"></i> salim</a>
        <a href="https://portfolio-salim.web.app"><i class="fas fa-external-link-alt"></i> salim</a>
        <a href="#"><i class="fab fa-github"></i> GitHub 2</a>
        <a href="#"><i class="fas fa-external-link-alt"></i> Portfolio 2</a>
        <p>&copy; 2024 ISTA | Cité de l'air El Jadida | by Salim and Abdo</p>
    </div>
    <script>
        // Change background color every 3 seconds
        setInterval(changeBackgroundColor, 3000);

        function changeBackgroundColor() {
            const colors = ['#ff0000', '#00ff00', '#0000ff']; // Array of colors
            const randomColor = colors[Math.floor(Math.random() * colors.length)]; // Get random color from array
            document.body.style.backgroundColor = randomColor; // Set background color
        }
    </script>
</body>
</html>
