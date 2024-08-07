@extends('site.common')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="card my-5">
                        <h3 class="card-header">
                            Login

                            <span class="float-right">
                                <a href="{{ route('register') }}" class="text-decoration-underline">Register</a>
                            </span>
                        </h3>
                        <div class="px-5 py-3">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                                    placeholder="name@example.com" value="{{ old('email')  }}" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
    
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="***********" required>
                            </div>
    
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-lg btn-primary rounded-0">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
