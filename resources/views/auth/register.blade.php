@extends('site.common')

@section('title', 'Register')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h3 class="card-header text-center bg-white border-0">NEW CUSTOMER</h3>
                    <div class="card-body">
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                                       value="{{ old('name') }}" placeholder="&#xf007; Your Name" required style="font-family: Arial, FontAwesome;">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                       value="{{ old('email') }}" placeholder="&#xf0e0; name@example.com" required style="font-family: Arial, FontAwesome;">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone"
                                       value="{{ old('phone') }}" placeholder="&#xf095; +1 123 456 7890" required style="font-family: Arial, FontAwesome;">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                       placeholder="&#xf023; Password" required style="font-family: Arial, FontAwesome;">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                       placeholder="&#xf023; Confirm Password" required style="font-family: Arial, FontAwesome;">
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <p>OR</p>
                            <p>Already have an account? <a href="{{ route('login') }}" class="text-decoration-none">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('images/login-image.jpg') }}" alt="Register Image" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-4 text-center">
                <p>Register with one of your social</p>
                <a href="" class="btn btn-primary btn-block mb-2">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="" class="btn btn-danger btn-block">
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
        .form-control::placeholder {
            font-family: 'FontAwesome';
        }
        .btn-primary {
            background-color: #666BC0 !important;
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
