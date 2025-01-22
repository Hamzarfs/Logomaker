@extends('site.common')

@section('title', 'Create Your Account - RFS Logo Design')
@section('meta_desc',
    'Join RFS Logo Design today! Create an account to start your logo design journey, track progress,
    and collaborate with our expert design team.')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .card {
            border-radius: 8px;
            border: none;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .text-muted {
            font-size: 0.9rem;
        }

        form {
            padding-top: 20px;
        }

        input {
            border-radius: 8px;
            height: 50px;
            font-size: 0.9rem;
            padding-left: 15px;
        }

        .btn-register {
            height: 50px;
            border-radius: 8px;
            background-color: #6c5ce7;
            color: white;
            font-size: 1rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-register:hover {
            background-color: #5b4dbf;
        }

        .btn-outline-primary {
            background-color: white;
            border-color: #ccc;
            color: #333;
        }

        .btn-outline-primary:hover {
            background-color: #e0e0e0;
        }

        .text-center a {
            color: #6c5ce7;
            font-weight: 500;
        }

        .text-center a:hover {
            color: #5b4dbf;
        }

        .row {
            display: flex;
            justify-content: space-between;
        }

        .col-md-6 {
            max-width: 45%;
        }



        span.fa.fa-fw.field-icon.toggle-password.fa-eye {

            margin-right: 20px !important;
            margin-top: 5px !important;
        }

        .fa-fw {
            margin-right: 20px !important;
            margin-top: 5px !important;
        }

        @media (max-width: 768px) {
            .col-md-6 {
                max-width: 100%;
            }

            .row {
                flex-direction: column;
            }

            .text-center {
                margin-top: 20px;
            }
        }
    </style>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <div class="text-center">
                        <h1 class="fw-bold">Create an Account</h1>
                        <p class="text-muted">Join us today and bring your logo vision to life with our Logo Maker.</p>
                    </div>
                    <form action="{{ route('register') }}" method="post" id="registerForm" novalidate>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" value="{{ old('name') }}" placeholder="Your Name" pattern="[A-Za-z\s]+"
                                title="Name cannot contain special characters or numbers." required>
                            <div class="invalid-feedback" id="nameError">Please enter a valid name (letters and spaces
                                only).</div>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" value="{{ old('email') }}" placeholder="name@example.com" required>
                            <div class="invalid-feedback" id="emailError">Please enter a valid email address.</div>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone"
                                id="phone" value="{{ old('phone') }}" placeholder="+1 123 456 7890"
                                pattern="^\+?[0-9\s]+$" maxlength="15"
                                title="Phone number should contain only numbers and spaces, and can start with a '+'."
                                required>
                            <div class="invalid-feedback" id="phoneError">Please enter a valid phone number (max 15 digits).
                            </div>
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password Field with Eye Icon -->
                        <div class="mb-3 position-relative">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Password" minlength="8" required>
                            <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"
                                style="position: absolute; right: 10px; top: 35px; cursor: pointer;"></span>
                            <div class="invalid-feedback" id="passwordError">Password must be at least 8 characters long.
                            </div>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="mb-3 position-relative">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                id="password_confirmation" placeholder="Confirm Password" required>
                            <span toggle="#password_confirmation" class="fa fa-fw fa-eye field-icon toggle-password"
                                style="position: absolute; right: 10px; top: 35px; cursor: pointer;"></span>
                            <div class="invalid-feedback" id="passwordConfirmError">Passwords do not match.</div>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn-register">Register</button>
                        </div>
                    </form>

                    <div class="text-center mt-3">
                        <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div >
            <p><b>OR</b></p>
            <p>Register with one of your social</p>
            <a href="" class="btn btn-primary btn-block mb-2">
                <i class="fab fa-facebook"></i> Facebook
            </a>
            <a href="{{ route('google.login') }}" class="btn btn-danger btn-block">
                <i class="fab fa-google"></i> Google
            </a>
        </div> --}}

            <div class="col-md-6 text-center">
                <img src="{{ asset('images/Group 212.webp') }}" alt="Register Image" class="img-fluid">
            </div>
        </div>
    </div>


    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(function(element) {
            element.addEventListener('click', function() {
                const input = document.querySelector(this.getAttribute('toggle'));
                const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
                input.setAttribute('type', type);
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });
        });

        document.getElementById('registerForm').addEventListener('submit', function(event) {
            let form = event.target;
            let isValid = true;

            // Name validation: no special characters
            let nameField = form.querySelector('#name');
            let nameRegex = /^[A-Za-z\s]+$/;
            if (!nameRegex.test(nameField.value.trim())) {
                nameField.classList.add('is-invalid');
                isValid = false;
            } else {
                nameField.classList.remove('is-invalid');
            }

            // Email validation: proper email format
            let emailField = form.querySelector('#email');
            let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailField.value.trim())) {
                emailField.classList.add('is-invalid');
                isValid = false;
            } else {
                emailField.classList.remove('is-invalid');
            }

            // Phone validation: only numbers and spaces, and maximum 15 characters
            let phoneField = form.querySelector('#phone');
            let phoneRegex = /^\+?[0-9\s]+$/;
            let phoneLength = phoneField.value.trim().length;

            if (!phoneRegex.test(phoneField.value.trim()) || phoneLength < 10 || phoneLength > 15) {
                phoneField.classList.add('is-invalid');
                isValid = false;
            } else {
                phoneField.classList.remove('is-invalid');
            }


            // Password validation: required
            let passwordField = form.querySelector('#password');
            let passwordConfirmField = form.querySelector('#password_confirmation');
            if (passwordField.value.trim() === '') {
                passwordField.classList.add('is-invalid');
                isValid = false;
            } else {
                passwordField.classList.remove('is-invalid');
            }

            // Confirm password match
            if (passwordField.value !== passwordConfirmField.value) {
                passwordConfirmField.classList.add('is-invalid');
                isValid = false;
            } else {
                passwordConfirmField.classList.remove('is-invalid');
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    </script>

@endsection
