<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
    background-image: url('{{ asset("images/theme.png") }}');
    /* Adjust background properties as needed */
    background-size: cover;
    background-position: center;
    /* Add more background properties if necessary */
}

</style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="header">
        <div class="container">
            <div class="header-content">
            <img src="{{ asset('images/logo.png') }}" alt="StepNStyle Logo" style="width: 500px; height: 200px;"></div>
               <nav class="header">
    
        <ul class="nav">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li><a href="{{ route('shop.index') }}" class="nav-link">Shop</a></li>
            <li><a href="{{ route('orders.index') }}" class="nav-link">Orders</a></li>
            <li><a href="{{ route('cart.index') }}" class="nav-link">Cart</a></li>
            <li><a href="{{ route('profile.index') }}" class="nav-link">Profile</a></li>
        

                    @if (Route::has('login'))
                        @auth
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

                        @else
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                           </ul>
    </s>
     @endif

                        @endauth
                    @endif
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
        </div>
    </footer>
</body>
</html>
