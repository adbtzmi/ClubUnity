<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                background: url('https://news.iium.edu.my/wp-content/uploads/2019/11/96b17d2a3c3713703df33d8785f92d4f15669639031.jpg') no-repeat center center fixed;
                background-size: cover;
                color: #ffffff6f;
            }
            .header {
                z-index: 1;
                padding: 10px;
                display: flex;
                justify-content: flex-end;
            }
            .header a {
                margin: 0 10px;
                padding: 10px 20px;
                text-decoration: none;
                color: #ffffff;
                border: 1px solid transparent;
                border-radius: 5px;
                transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            }
            .header a:hover {
                background-color: #007bff;
                color: white;
                border-color: #007bff;
            }
            .main {
                align-items: center;
                justify-content: center;
                z-index: 1;
                margin: 20px;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                color: #fff;
                text-align: center;
            }
            .footer {
                z-index: 1;
                text-align: center;
                padding: 10px;
                color: #ffffff;
                font-size: 0.9em;
            }
        </style>
    </head>
    <body>
        <header class="header">
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
        </header>

        <div class="main">
            <h1>Welcome to Club Unity</h1>
            <p>A Comprehensive Web Application for University Club Management</p>
        </div>

        <footer class="footer">
            Club Unity
        </footer>
    </body>
</html>
