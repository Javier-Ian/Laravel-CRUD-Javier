<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h4>Create Account</h4>
                <p>Join us! Please enter your details</p>
        </div>

            <form method="POST" action="{{ route('register') }}" class="auth-form">
                @csrf
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <div class="input-group">
                        <span class="input-icon">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" name="name" class="form-control" required autofocus>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-group">
                        <span class="input-icon">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <span class="input-icon">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="input-group">
                        <span class="input-icon">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>
                </div>
                
                <button type="submit" class="btn-submit">Create Account</button>

                <div class="auth-footer">
                    <p>Already have an account? <a href="{{ route('login') }}" class="register-link">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>

    <style>
        :root {
            --primary-blue: #4682B4;
            --secondary-blue: #6495ED;
            --light-blue: #87CEEB;
            --hover-blue: #5B9BD5;
            --soft-blue: #B0C4DE;
            --light: #ffffff;
            --dark: #2c3e50;
            --gray-light: #f8f9fa;
        }

        body {
            background: linear-gradient(135deg, #f6f8fc 0%, #e9f0f9 100%);
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .auth-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .auth-card {
            background: var(--light);
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(70, 130, 180, 0.1);
            width: 400px;
            padding: 2.5rem;
            position: relative;
            overflow: hidden;
            margin: 0 auto;
            animation: floatIn 0.6s ease-out;
        }

        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--primary-blue), var(--secondary-blue));
        }

        .auth-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .auth-header h4 {
            color: var(--dark);
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .auth-header p {
            color: #64748b;
            font-size: 0.95rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            color: var(--dark);
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .input-group {
            position: relative;
            display: flex;
            align-items: center;
            background: #f8fafc;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .input-group:focus-within {
            background: var(--light);
            box-shadow: 0 0 0 2px rgba(70, 130, 180, 0.2);
        }

        .input-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            color: var(--primary-blue);
        }

        .form-control {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.95rem;
            background: transparent;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-blue);
        }

        .btn-submit {
            width: 100%;
            padding: 0.875rem;
            background: linear-gradient(90deg, var(--primary-blue), var(--secondary-blue));
            color: var(--light);
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(70, 130, 180, 0.2);
        }

        .auth-footer {
            text-align: center;
            margin-top: 2rem;
            color: #64748b;
            font-size: 0.95rem;
        }

        .register-link {
            color: var(--primary-blue);
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .register-link:hover {
            color: var(--secondary-blue);
        }

        .invalid-feedback {
            color: #ef4444;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }

        @keyframes floatIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            .auth-card {
                width: 100%;
                padding: 2rem;
                margin: 1rem;
            }

            .auth-container {
                padding: 1rem;
            }
        }
    </style>
</body>
</html>
