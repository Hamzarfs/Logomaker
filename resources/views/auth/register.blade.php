@extends('site.common')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="card my-5">
                        <h3 class="card-header">
                            Register

                            <span class="float-right">
                                <a href="{{ route('login') }}" class="text-decoration-underline">Login</a>
                            </span>
                        </h3>
                        <div class="px-5 py-3">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}"
                                    placeholder="name@example.com" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}"
                                    placeholder="name@example.com" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone number</label>
                                <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}"
                                    placeholder="+1 123 456 7890" required>
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password"
                                    placeholder="***********" required>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Re enter password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation" placeholder="***********" required>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-lg btn-primary rounded-0">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
