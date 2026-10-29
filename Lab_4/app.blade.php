
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Creative Studio')</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f5f7;
            color: #252a34;
            line-height: 1.6;
        }

        nav {
            background: #202a44;
            color: white;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
        }

        .hero {
            background: linear-gradient(135deg, #263859, #4b79a1);
            color: white;
            text-align: center;
            padding: 90px 20px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 15px;
        }

        .content {
            max-width: 1000px;
            margin: 40px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #e76f51;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        footer {
            background: #202a44;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
    </style>

    @yield('styles')
</head>
<body>

    <nav>
        <h2>Creative Studio</h2>
        <div>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/about') }}">About</a>
        </div>
    </nav>

    <header class="hero">
        <h1>@yield('heading', 'Welcome to Creative Studio')</h1>
        <p>@yield('subtitle', 'Creative ideas. Beautiful digital experiences.')</p>
    </header>

    <main class="content">
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Creative Studio. All rights reserved.</p>
    </footer>

    @yield('scripts')
</body>
</html>
