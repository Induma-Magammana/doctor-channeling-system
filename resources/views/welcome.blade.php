<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Doctor Channeling System</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f4f4f9;
                color: #333;
            }
            header {
                background-color: #0056b3;
                color: white;
                padding: 20px 0;
                text-align: center;
            }
            header h1 {
                margin: 0;
                font-size: 2.5rem;
            }
            header p {
                margin: 5px 0;
                font-size: 1.2rem;
            }
            .container {
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }
            .buttons {
                margin: 20px 0;
                text-align: center;
            }
            .buttons a {
                text-decoration: none;
                padding: 10px 20px;
                border-radius: 5px;
                font-size: 1rem;
                margin: 0 10px;
                color: white;
                background-color: #0056b3;
                transition: background-color 0.3s;
            }
            .buttons a:hover {
                background-color: #003f7f;
            }
            .services, .testimonials {
                margin: 40px 0;
            }
            .services h2, .testimonials h2 {
                text-align: center;
                color: #0056b3;
                margin-bottom: 20px;
            }
            .services .card, .testimonials .card {
                background-color: white;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                padding: 20px;
                text-align: center;
                margin: 20px;
                flex: 1;
            }
            .services .card h3, .testimonials .card h3 {
                margin: 10px 0;
                font-size: 1.5rem;
                color: #333;
            }
            .services .card p, .testimonials .card p {
                color: #666;
            }
            .flex-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }
            footer {
                text-align: center;
                padding: 10px;
                background-color: #0056b3;
                color: white;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Welcome to the Doctor Channeling System</h1>
            <p>Your one-stop solution for scheduling doctor appointments with ease.</p>
        </header>

        <div class="container">
            <div class="buttons">
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}">Go to Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>

            <section class="services">
                <h2>Our Services</h2>
                <div class="flex-container">
                    <div class="card">
                        <h3>Doctor Channeling</h3>
                        <p>Book appointments with the best doctors in your area.</p>
                    </div>
                    <div class="card">
                        <h3>Specialized Care</h3>
                        <p>Access specialized medical services tailored to your needs.</p>
                    </div>
                    <div class="card">
                        <h3>Health Checkups</h3>
                        <p>Schedule regular health checkups for a healthier tomorrow.</p>
                    </div>
                </div>
            </section>

            <section class="testimonials">
                <h2>What Our Users Say</h2>
                <div class="flex-container">
                    <div class="card">
                        <h3>Amal Perera</h3>
                        <p>"This system made scheduling appointments so much easier for me!"</p>
                    </div>
                    <div class="card">
                        <h3>Jane Smith</h3>
                        <p>"Highly recommend it to anyone looking for quick and reliable service."</p>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <p>&copy; 2025 Doctor Channeling System. All rights reserved.</p>
        </footer>
    </body>
</html>