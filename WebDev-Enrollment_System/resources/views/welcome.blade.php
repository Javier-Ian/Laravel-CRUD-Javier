<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
        <style>
            :root {
                --primary-blue: #4682B4;        /* Steel Blue - main color */
                --secondary-blue: #6495ED;      /* Cornflower Blue - lighter accent */
                --light-blue: #87CEEB;          /* Sky Blue - lightest accent */
                --hover-blue: #5B9BD5;          /* Microsoft Blue - hover state */
                --soft-blue: #B0C4DE;           /* Light Steel Blue - subtle accents */
                --light: #ffffff;
                --dark: #2c3e50;
                --gray-light: #f8f9fa;
            }

            body {
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(135deg, var(--gray-light) 0%, var(--soft-blue) 100%);
                color: var(--dark);
                line-height: 1.6;
            }

            /* Navigation */
            .navbar {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                box-shadow: 0 4px 12px rgba(70, 130, 180, 0.1);
                padding: 1.5rem 0;
            }

            .navbar-brand {
                font-size: 1.5rem;
                font-weight: 600;
                color: var(--primary-blue) !important;
                letter-spacing: 0.5px;
            }

            .nav-link {
                color: var(--primary-blue) !important;
                font-size: 1rem;
                font-weight: 500;
                padding: 0.5rem 1.5rem;
                margin: 0 0.5rem;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .nav-link:hover {
                color: var(--secondary-blue) !important;
                transform: translateY(-1px);
            }

            /* Hero Section */
            .hero-section {
                min-height: 100vh;
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            .hero-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: radial-gradient(circle at 50% 50%, 
                    rgba(255, 255, 255, 0.8) 0%, 
                    rgba(255, 255, 255, 0.2) 100%);
                z-index: 1;
            }

            .hero-content {
                position: relative;
                z-index: 2;
                text-align: center;
                max-width: 800px;
                margin: 0 auto;
                padding: 2rem;
            }

            .welcome-text {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 1rem;
                color: var(--dark);
                opacity: 0;
                animation: fadeInUp 0.8s ease forwards;
            }

            .title {
                font-size: 4rem;
                font-weight: 700;
                margin-bottom: 2rem;
                background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                opacity: 0;
                animation: fadeInUp 0.8s ease 0.2s forwards;
            }

            .description {
                font-size: 1.25rem;
                color: rgba(0, 0, 0, 0.8);
                margin-bottom: 3rem;
                max-width: 600px;
                margin-left: auto;
                margin-right: auto;
                opacity: 0;
                animation: fadeInUp 0.8s ease 0.4s forwards;
            }

            .cta-button {
                display: inline-block;
                padding: 1rem 2.5rem;
                font-size: 1.1rem;
                font-weight: 600;
                color: var(--light);
                background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
                border: none;
                border-radius: 50px;
                text-decoration: none;
                transition: all 0.3s ease;
                opacity: 0;
                animation: fadeInUp 0.8s ease 0.6s forwards;
            }

            .cta-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(70, 130, 180, 0.3);
                background: linear-gradient(310deg, var(--secondary-blue), var(--light-blue));
            }

            /* Animated Background */
            .animated-bg {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 0;
            }

            .animated-bg::after {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                width: 150%;
                height: 150%;
                background: linear-gradient(135deg, 
                    var(--primary-blue) 0%, 
                    var(--secondary-blue) 100%);
                transform-origin: center;
                animation: rotate 20s linear infinite;
                opacity: 0.1;
            }

            /* Animations */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes rotate {
                from {
                    transform: translate(-50%, -50%) rotate(0deg);
                }
                to {
                    transform: translate(-50%, -50%) rotate(360deg);
                }
            }

            /* Responsive Design */
            @media (max-width: 768px) {
                .title {
                    font-size: 3rem;
                }
                .description {
                    font-size: 1.1rem;
                }
                .navbar-brand {
                    font-size: 1.25rem;
                }
            }

            .welcome-section {
                background: rgba(255, 255, 255, 0.9);
                backdrop-filter: blur(10px);
                border-radius: 20px;
                box-shadow: 0 8px 32px rgba(70, 130, 180, 0.1);
                padding: 3rem;
                margin: 2rem auto;
                max-width: 1200px;
            }

            .welcome-title {
                background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                font-weight: 700;
            }

            .btn-primary {
                background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
                border: none;
                box-shadow: 0 4px 12px rgba(70, 130, 180, 0.2);
                transition: all 0.3s ease;
            }

            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(70, 130, 180, 0.3);
                background: linear-gradient(310deg, var(--secondary-blue), var(--light-blue));
            }

            /* Animation for content */
            .welcome-content {
                animation: fadeInUp 0.6s ease-out;
            }
        </style>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100">
            <div class="container">
                <a class="navbar-brand" href="/">Student Information System</a>
                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ms-auto">
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="hero-section">
            <div class="animated-bg"></div>
            <div class="container">
                <div class="hero-content">
                    <h2 class="welcome-text">Welcome to</h2>
                    <h1 class="title">Student Information System</h1>
                    <p class="description">
                        Manage student records, track academic progress, and streamline administrative tasks efficiently.
                    </p>
                    @guest
                        <a href="{{ route('login') }}" class="cta-button">
                            Get Started
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </body>
</html>
