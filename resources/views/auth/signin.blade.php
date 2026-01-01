<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Job Board</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            overflow-x: hidden;
        }

        .signin-container {
            min-height: 100vh;
            background: linear-gradient(135deg, #1e3a8a 0%, #312e81 50%, #1e1b4b 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
            position: relative;
            overflow: hidden;
        }

        /* Animated Background Particles */
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float-particle 20s infinite ease-in-out;
        }

        .particle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 60px;
            height: 60px;
            top: 60%;
            left: 80%;
            animation-delay: 3s;
        }

        .particle:nth-child(3) {
            width: 100px;
            height: 100px;
            top: 80%;
            left: 20%;
            animation-delay: 6s;
        }

        .particle:nth-child(4) {
            width: 70px;
            height: 70px;
            top: 30%;
            left: 70%;
            animation-delay: 9s;
        }

        @keyframes float-particle {
            0%, 100% {
                transform: translate(0, 0) scale(1);
                opacity: 0.3;
            }
            25% {
                transform: translate(30px, -30px) scale(1.1);
                opacity: 0.5;
            }
            50% {
                transform: translate(-20px, 20px) scale(0.9);
                opacity: 0.4;
            }
            75% {
                transform: translate(20px, 30px) scale(1.05);
                opacity: 0.6;
            }
        }

        /* Main Card */
        .signin-card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            max-width: 480px;
            width: 100%;
            padding: 2rem 2.5rem;
            position: relative;
            z-index: 10;
            animation: slideUp 0.8s cubic-bezier(0.16, 1, 0.3, 1);
            backdrop-filter: blur(10px);
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header Section */
        .header-section {
            text-align: center;
            animation: fadeIn 1s ease-out 0.3s backwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .logo-wrapper {
            position: relative;
            display: inline-block;
            margin-bottom: 1.5rem;
        }

        .logo-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            position: relative;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7);
            }
            50% {
                box-shadow: 0 0 0 20px rgba(59, 130, 246, 0);
            }
        }

        .logo-circle i {
            font-size: 2.5rem;
            color: white;
        }

        .header-section h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
            letter-spacing: -0.02em;
        }

        .header-section p {
            font-size: 1rem;
            color: #64748b;
            font-weight: 400;
        }

        /* Form Styling */
        .form-group {
            animation: slideInLeft 0.6s ease-out backwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.4s; }
        .form-group:nth-child(2) { animation-delay: 0.5s; }
        .form-group:nth-child(3) { animation-delay: 0.6s; }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .form-label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-label i {
            color: #3b82f6;
            font-size: 1.1rem;
        }

        .input-wrapper {
            position: relative;
        }

        .form-control {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.875rem 1.125rem;
            font-size: 0.95rem;
            color: #1e293b;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background-color: #f8fafc;
            width: 100%;
        }

        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
            outline: none;
            background-color: #ffffff;
            transform: translateY(-2px);
        }

        .form-control::placeholder {
            color: #94a3b8;
        }

        /* Password Toggle */
        .password-toggle-btn {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #64748b;
            cursor: pointer;
            padding: 0.5rem;
            transition: all 0.3s ease;
            z-index: 5;
        }

        .password-toggle-btn:hover {
            color: #3b82f6;
            transform: translateY(-50%) scale(1.1);
        }

        .password-toggle-btn i {
            font-size: 1.2rem;
        }

        .input-wrapper .form-control {
            padding-right: 3rem;
        }

        /* Remember Me & Forgot Password */
        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .form-check {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .form-check-input {
            width: 1.125rem;
            height: 1.125rem;
            border: 2px solid #cbd5e1;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 0;
        }

        .form-check-input:checked {
            background-color: #3b82f6;
            border-color: #3b82f6;
            animation: checkBounce 0.3s ease;
        }

        @keyframes checkBounce {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.2); }
        }

        .form-check-input:focus {
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }

        .form-check-label {
            font-size: 0.875rem;
            color: #475569;
            margin: 0;
            cursor: pointer;
        }

        .forgot-password {
            font-size: 0.875rem;
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #2563eb;
            text-decoration: underline;
        }

        /* Submit Button */
        .btn-submit {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            border: none;
            border-radius: 12px;
            padding: 1rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            width: 100%;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
            position: relative;
            overflow: hidden;
            animation: slideInLeft 0.6s ease-out 0.7s backwards;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .btn-submit:hover::before {
            left: 100%;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(59, 130, 246, 0.5);
        }

        .btn-submit:active {
            transform: translateY(-1px);
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            margin: 2rem 0 1.5rem;
            animation: fadeIn 1s ease-out 0.8s backwards;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, transparent, #cbd5e1, transparent);
        }

        .divider span {
            padding: 0 1rem;
            color: #94a3b8;
            font-size: 0.85rem;
            font-weight: 500;
        }

        /* Social Buttons */
        .social-buttons {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 2rem;
            animation: slideInLeft 0.6s ease-out 0.9s backwards;
        }

        .btn-social {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 0.875rem 1rem;
            font-size: 0.9rem;
            font-weight: 600;
            background: white;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-social:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-social i {
            font-size: 1.25rem;
        }

        .btn-google {
            color: #ea4335;
        }

        .btn-google:hover {
            border-color: #ea4335;
            background: #fef2f2;
        }

        .btn-facebook {
            color: #1877f2;
        }

        .btn-facebook:hover {
            border-color: #1877f2;
            background: #eff6ff;
        }

        /* Sign Up Link */
        .signup-link {
            text-align: center;
            padding-top: 1.5rem;
            border-top: 1px solid #e2e8f0;
            animation: fadeIn 1s ease-out 1s backwards;
        }

        .signup-link p {
            font-size: 0.95rem;
            color: #64748b;
            margin: 0;
        }

        .signup-link a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
            margin-left: 0.25rem;
            transition: all 0.3s ease;
        }

        .signup-link a:hover {
            color: #2563eb;
            text-decoration: underline;
        }

        /* Validation Styles */
        .invalid-feedback {
            font-size: 0.8rem;
            color: #ef4444;
            margin-top: 0.375rem;
            display: block;
        }

        .form-control.is-invalid {
            border-color: #ef4444;
            animation: shake 0.4s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        .form-control.is-invalid:focus {
            box-shadow: 0 0 0 4px rgba(239, 68, 68, 0.1);
        }

        /* Responsive */
        @media (max-width: 576px) {
            .signin-card {
                padding: 2rem 1.5rem;
            }

            .header-section h1 {
                font-size: 1.75rem;
            }

            .social-buttons {
                grid-template-columns: 1fr;
            }

            .form-options {
                flex-direction: column;
                gap: 1rem;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="signin-container">
        <!-- Animated Particles -->
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>

        <!-- Sign In Card -->
        <div class="signin-card">
            <!-- Header -->
            <div class="header-section">
                <div class="logo-wrapper">
                    <div class="logo-circle">
                        <i class="bi bi-person-circle"></i>
                    </div>
                </div>
                <h1>Welcome Back!</h1>
                <p>Sign in to continue to your account</p>
            </div>

            <!-- Form -->
            <form action="{{ url('signin') }}" method="POST" id="signinForm" novalidate>
                @csrf

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email" class="form-label">
                        <i class="bi bi-envelope-fill"></i>
                        Email Address
                    </label>
                    <input
                        type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="form-group">
                    <label for="password" class="form-label">
                        <i class="bi bi-lock-fill"></i>
                        Password
                    </label>
                    <div class="input-wrapper">
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="password"
                            name="password"
                            placeholder="Enter your password"
                            required
                        >
                        <button class="password-toggle-btn" type="button" id="togglePassword">
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="form-options">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="remember"
                            name="remember"
                        >
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="forgot-password">Forgot password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-submit">
                    <i class="bi bi-box-arrow-in-right me-2"></i>
                    Sign In
                </button>


                <!-- Sign Up Link -->
                <div class="signup-link">
                    <p>Don't have an account?<a href="{{ url('signup') }}">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

     <!-- <script>
        // Form validation
        (function() {
            'use strict';
            const form = document.getElementById('signinForm');

            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();


        // Input focus animations
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.01)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });
    </script>  -->

    <!-- Password toggle -->
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            if (type === 'password') {
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            } else {
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            }
        });
    </script>
</body>
</html>
