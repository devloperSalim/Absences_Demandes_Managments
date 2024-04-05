<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('/storage/images/2024-03-23 (2).jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .header {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
        .header a {
            text-decoration: none;
            color: #fff;
            margin-left: 20px;
            transition: color 0.3s ease;
        }
        .header a:hover {
            color: #ff0000;
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
    <div class="header">
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
    </div>

    <div class="welcome-message">
        <h1 class="title">Welcome, Admin!</h1>
        <p>Feel free to explore our platform.</p>
    </div>
</body>
</html>
