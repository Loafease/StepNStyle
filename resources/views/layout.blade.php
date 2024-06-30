<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StepNStyle Shop</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">StepNStyle</div>
                @if (Route::has('login'))
                        @auth
                        <nav class="nav">
                    <a href="/" class="nav-link">Home</a>
                    <a href="/shop" class="nav-link">Shop</a>
                    <a href="/categories" class="nav-link">Categories</a>
                    <a href="/about" class="nav-link">About</a>
                    <a href="/contact" class="nav-link">Contact</a>
                    <a href="/cart" class="nav-link">Cart</a>
                 
                            <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                        @else
                        <a href="/" class="nav-link">Home</a>
                        <a href="/about" class="nav-link">About</a>
                        <a href="/contact" class="nav-link">Contact</a>
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        @endauth
                    @endif
                </nav>
            </div>
        </div>
    </header>
<body>
    @yield('content')
</body>
</html>
