<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - StepNStyle</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap">
    <style>
        /* General styles */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        /* Header styles */
        .header {
            background-color: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header .logo {
            display: flex;
            align-items: center;
        }

        .header .logo img {
            margin-right: 0.5rem;
        }

        .header .logo span {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
        }

        .nav {
            display: flex;
            gap: 1rem;
        }

        .nav-link {
            padding: 0.5rem 1rem;
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #ff2d20;
        }

        /* Profile section styles */
        .profile {
            background-color: #fff;
            padding: 4rem 1.5rem;
            margin-top: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .profile .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
        }

        .profile-details {
            max-width: 600px;
            margin: 0 auto;
        }

        .profile-details .form-group {
            margin-bottom: 1.5rem;
        }

        .profile-details .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }

        .profile-details .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #eaeaea;
            border-radius: 5px;
            font-size: 1rem;
        }

        .profile-update-button {
            padding: 0.75rem 1.5rem;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-update-button:hover {
            background-color: #0056b3;
        }

        .profile-orders {
            margin-top: 3rem;
            text-align: center;
        }

        .profile-orders h3 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .orders-list {
            list-style: none;
            padding: 0;
        }

        .orders-list > li {
            border: 1px solid #eaeaea;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color: #f9f9f9;
        }

        .orders-list > li strong {
            font-size: 1.25rem;
        }

        .orders-list > li ul {
            list-style: none;
            padding: 0;
            margin: 0.5rem 0 0 1rem;
        }

        .orders-list > li ul li {
            font-size: 1rem;
            padding: 0.5rem 0;
        }

        /* Footer styles */
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        .footer .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .footer-text {
            margin: 0;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
   

    <section class="profile">
        <div class="container">
            <h2 class="section-title">Profile</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="profile-details">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="profile-update-button">Update Profile</button>
                </form>
            </div>

           
                
                @endif
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p class="footer-text">&copy; 2024 StepNStyle. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

