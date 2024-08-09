@extends('site.common')

@section('title', 'Login')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h3 class="card-header text-center bg-white border-0">EXISTING CUSTOMER</h3>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope"></i> EMAIL
                                </label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="name@example.com" value="{{ old('email')  }}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">
                                    <i class="fas fa-lock"></i> PASSWORD
                                </label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="***********" required>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <p>OR</p>
                            <p>Don't have a LogoDesign account? <a href="{{ route('register') }}" class="text-decoration-none">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/login-image.webp') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 text-center">
                <p>Login with one of your social</p>
                <a href="" class="btn btn-primary btn-block mb-2">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="{{ route('google.login') }}" class="btn btn-danger btn-block">
                    <i class="fab fa-google"></i> Google
                </a>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            border-radius: 15px;
        }
        .card-header {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .form-label {
            font-weight: bold;
            text-transform: uppercase;
        }
        .btn-primary {
            background-color: #4e73df;
            border: none;
        }
        .btn-primary:hover {
            background-color: #2e59d9;
        }
        .btn-danger {
            background-color: #e74a3b;
            border: none;
        }
        .btn-danger:hover {
            background-color: #c0392b;
        }
        .shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
