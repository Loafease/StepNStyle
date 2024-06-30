<header class="header">
    <div class="container">
        <div class="header-content">
            <div class="logo">StepNStyle</div>
            <nav class="nav">
                <a href="/" class="nav-link">Home</a>
                <a href="/shop" class="nav-link">Shop</a>
                <a href="/categories" class="nav-link">Categories</a>
                <a href="/about" class="nav-link">About</a>
                <a href="/contact" class="nav-link">Contact</a>
                <a href="/cart" class="nav-link">Cart</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    @else
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
