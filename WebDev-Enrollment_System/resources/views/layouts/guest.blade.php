<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        
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
                background: linear-gradient(135deg, var(--gray-light) 0%, var(--soft-blue) 100%);
                min-height: 100vh;
            }

            .auth-card {
                background: rgba(255, 255, 255, 0.9);
                backdrop-filter: blur(10px);
                border-radius: 20px;
                box-shadow: 0 8px 32px rgba(70, 130, 180, 0.1);
                padding: 2rem;
                max-width: 450px;
                width: 100%;
                animation: fadeIn 0.6s ease-out;
            }

            .logo {
                margin-bottom: 2rem;
            }

            .form-control {
                border: 1px solid rgba(70, 130, 180, 0.2);
                border-radius: 8px;
                padding: 0.75rem 1rem;
                transition: all 0.3s ease;
            }

            .form-control:focus {
                border-color: var(--primary-blue);
                box-shadow: 0 0 0 0.2rem rgba(70, 130, 180, 0.1);
            }

            .btn-primary {
                background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
                border: none;
                border-radius: 8px;
                padding: 0.75rem 1.5rem;
                font-weight: 500;
                box-shadow: 0 4px 12px rgba(70, 130, 180, 0.2);
                transition: all 0.3s ease;
            }

            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 16px rgba(70, 130, 180, 0.3);
                background: linear-gradient(310deg, var(--secondary-blue), var(--light-blue));
            }

            .auth-link {
                color: var(--primary-blue);
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .auth-link:hover {
                color: var(--secondary-blue);
                text-decoration: none;
            }

            /* Form Labels */
            label {
                color: var(--dark);
                font-weight: 500;
                margin-bottom: 0.5rem;
            }

            /* Validation Errors */
            .invalid-feedback {
                color: #ef4444;
                font-size: 0.875rem;
            }

            /* Remember Me Checkbox */
            .form-check-input:checked {
                background-color: var(--primary-blue);
                border-color: var(--primary-blue);
            }

            /* Card Header */
            .card-header {
                background: linear-gradient(310deg, var(--primary-blue), var(--secondary-blue));
                color: var(--light);
                border-radius: 15px 15px 0 0;
                padding: 1.5rem;
            }

            /* Animation */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* Input Icons */
            .input-group-text {
                background: transparent;
                border-right: none;
                color: var(--primary-blue);
            }

            .input-group .form-control {
                border-left: none;
            }

            /* Error States */
            .is-invalid {
                border-color: #ef4444;
            }

            .is-invalid:focus {
                border-color: #ef4444;
                box-shadow: 0 0 0 0.2rem rgba(239, 68, 68, 0.1);
            }
        </style>
    </head>
    <body>
        <div class="auth-container">
            {{ $slot }}
        </div>
    </body>
</html>
