
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Job Board</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        .signup-container {
            min-height: 100vh;
            display: flex;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            position: relative;
            overflow: hidden;
        }

        /* Animated background circles */
        .signup-container::before,
        .signup-container::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .signup-container::before {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
        }

        .signup-container::after {
            width: 400px;
            height: 400px;
            bottom: -150px;
            right: -150px;
            animation-delay: 2s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.05); }
        }

        /* Left side - Branding */
        .branding-side {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem;
            color: white;
            position: relative;
            z-index: 1;
        }

        .branding-content {
            max-width: 500px;
            text-align: center;
        }

        .branding-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            animation: slideInLeft 0.8s ease-out;
        }

        .branding-content p {
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: slideInLeft 0.8s ease-out 0.2s backwards;
        }

        .feature-list {
            list-style: none;
            text-align: left;
            animation: slideInLeft 0.8s ease-out 0.4s backwards;
        }

        .feature-list li {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .feature-list li i {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: #ffd700;
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Right side - Form */
        .form-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 3rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 500px;
            animation: slideInRight 0.8s ease-out;
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h2 {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #666;
            font-size: 0.95rem;
        }

        .form-label {
            font-weight: 500;
            color: #444;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }

        .form-control {
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
            background-color: #fff;
        }

        .input-group-text {
            background: transparent;
            border: 2px solid #e0e0e0;
            border-left: none;
            border-radius: 0 12px 12px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .input-group .form-control {
            border-right: none;
            border-radius: 12px 0 0 12px;
        }

        .input-group:focus-within .input-group-text {
            border-color: #667eea;
        }

        .btn-signup {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 0.9rem;
            font-size: 1rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }

        .btn-signup:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.5rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .divider span {
            padding: 0 1rem;
            color: #999;
            font-size: 0.85rem;
        }

        .social-btn {
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            padding: 0.7rem;
            font-weight: 500;
            transition: all 0.3s ease;
            background: white;
        }

        .social-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-google {
            color: #db4437;
            border-color: #db4437;
        }

        .btn-google:hover {
            background: #db4437;
            color: white;
        }

        .btn-facebook {
            color: #4267B2;
            border-color: #4267B2;
        }

        .btn-facebook:hover {
            background: #4267B2;
            color: white;
        }

        .signin-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
            font-size: 0.9rem;
        }

        .signin-link a {
            color: #667eea;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .signin-link a:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }

        .form-check-label {
            color: #666;
            font-size: 0.9rem;
        }

        .form-check-label a {
            color: #667eea;
            text-decoration: none;
        }

        .form-check-label a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .signup-container {
                flex-direction: column;
            }

            .branding-side {
                padding: 2rem;
                min-height: 40vh;
            }

            .branding-content h1 {
                font-size: 2.5rem;
            }

            .form-container {
                padding: 2rem;
            }
        }

        @media (max-width: 576px) {
            .branding-content h1 {
                font-size: 2rem;
            }

            .branding-content p {
                font-size: 1rem;
            }

            .form-container {
                padding: 1.5rem;
            }

            .form-header h2 {
                font-size: 1.5rem;
            }
        }

        /* Animation for form inputs */
        .form-group {
            animation: fadeInUp 0.5s ease-out backwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.1s; }
        .form-group:nth-child(2) { animation-delay: 0.2s; }
        .form-group:nth-child(3) { animation-delay: 0.3s; }
        .form-group:nth-child(4) { animation-delay: 0.4s; }
        .form-group:nth-child(5) { animation-delay: 0.5s; }

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
    </style>
</head>
<body>
    <div class="signup-container">
        <!-- Left Side - Branding -->
        <div class="branding-side">
            <div class="branding-content">
                <h1><i class="bi bi-briefcase-fill"></i> Job Board</h1>
                <p>Join thousands of professionals finding their dream jobs</p>
                <ul class="feature-list">
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Access to premium job listings</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Connect with top employers</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Build your professional profile</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Get personalized job recommendations</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Right Side - Form -->
        <div class="form-side">
            <div class="form-container">
                <div class="form-header">
                    <h2>Create Your Account</h2>
                </div>

                <form action="{{url('signup')}}" method="POST" id="signupForm" novalidate>
                    @csrf

                    <!-- Name Field -->
                    <div class="mb-3 form-group">
                        <label for="name" class="form-label">
                            <i class="bi bi-person-fill text-primary"></i> Full Name
                        </label>
                        <input 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            id="name" 
                            name="name" 
                            placeholder="Enter Name"
                            value="{{ old('name') }}"
                            required
                        >
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="invalid-feedback">Please enter your full name.</div>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">
                            <i class="bi bi-envelope-fill text-primary"></i> Email Address
                        </label>
                        <input 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            id="email" 
                            name="email" 
                            placeholder="Enter Email"
                            value="{{ old('email') }}"
                            required
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @else
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3 form-group">
                        <label for="password" class="form-label">
                            <i class="bi bi-lock-fill text-primary"></i> Password
                        </label>
                        <div class="input-group">
                            <input 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                id="password" 
                                name="password" 
                                placeholder="Enter Password"
                                required
                            >
                            <span class="input-group-text" id="togglePassword">
                                <i class="bi bi-eye" id="eyeIcon"></i>
                            </span>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @else
                                <div class="invalid-feedback">Password must be at least 8 characters.</div>
                            @enderror
                        </div>
                    </div>


                    <!-- Terms and Conditions -->
                    <div class="mb-4 form-group">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                id="terms" 
                                name="terms"
                                required
                            >
                            <label class="form-check-label" for="terms">
                                I agree to the <a href="#">Terms and Conditions</a>
                            </label>
                            <div class="invalid-feedback">You must agree before submitting.</div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-signup">
                            <i class="bi bi-person-plus-fill me-2"></i>Create Account
                        </button>
                    </div>

                    <!-- Sign In Link -->
                    <div class="signin-link">
                        Already have an account? <a href="/signin">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Form Validation Script -->
    <script>
        // Bootstrap form validation
        (function() {
            'use strict';
            const form = document.getElementById('signupForm');
            
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        })();

        // Toggle password visibility
        const togglePassword = document.getElementById('togglePassword');
        const password = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            
            // Toggle eye icon
            if (type === 'password') {
                eyeIcon.classList.remove('bi-eye-slash');
                eyeIcon.classList.add('bi-eye');
            } else {
                eyeIcon.classList.remove('bi-eye');
                eyeIcon.classList.add('bi-eye-slash');
            }
        });

        // Password confirmation validation
        const passwordConfirmation = document.getElementById('password_confirmation');
        
        passwordConfirmation.addEventListener('input', function() {
            if (password.value !== passwordConfirmation.value) {
                passwordConfirmation.setCustomValidity('Passwords do not match');
            } else {
                passwordConfirmation.setCustomValidity('');
            }
        });

        password.addEventListener('input', function() {
            if (passwordConfirmation.value && password.value !== passwordConfirmation.value) {
                passwordConfirmation.setCustomValidity('Passwords do not match');
            } else {
                passwordConfirmation.setCustomValidity('');
            }
        });
    </script>
</body>
</html>

