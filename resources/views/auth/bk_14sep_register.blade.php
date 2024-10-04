@extends('site.common')

@section('title', 'Create Your Account - RFS Logo Design')
@section('meta_desc', 'Join RFS Logo Design today! Create an account to start your logo design journey, track progress, and collaborate with our expert design team.')

@section('content')

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
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                               value="{{ old('name') }}" placeholder="Your Name" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                               value="{{ old('email') }}" placeholder="name@example.com" required >
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                               value="{{ old('phone') }}" placeholder="+1 123 456 7890" required>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                               placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                               placeholder="Confirm Password" required>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn-register">Register</button>
                    </div>
                </form>

                <div class="text-center mt-3">
                    <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
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
            document.getElementById('email').addEventListener('input', function() {
                var emailInput = this.value;
                var emailError = document.getElementById('emailError');

                // Regular expression to validate email with dot in domain
                var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

                if (!emailPattern.test(emailInput)) {
                    emailError.style.display = 'block'; // Show error
                    this.classList.add('is-invalid');  // Add invalid class to input
                } else {
                    emailError.style.display = 'none';  // Hide error
                    this.classList.remove('is-invalid');  // Remove invalid class
                }
            });
        </script>
@endsection
