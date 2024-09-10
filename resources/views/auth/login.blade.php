@extends('site.common')

@section('title', 'Login to Your Portal - RFS Logo Design')
@section('meta_desc', 'Access your RFS Logo Design account. Log in to manage your projects, view updates, and communicate with our design team for a smooth experience.')


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

    .btn-signin {
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

    .btn-signin:hover {
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

    /* Make sure the row stays responsive and columns stay side by side */
    .row {
        display: flex;
        justify-content: space-between;
    }

    /* Ensure the form and image are equally distributed */
    .col-md-5 {
        max-width: 45%;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .col-md-5 {
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
            <div class="col-md-5">
                <div class="card shadow p-4">
                    <div class="text-center">
                        <h1 class="fw-bold">Welcome👋</h1>
                        <p class="text-muted">Today is a new day. It's your day. You shape it. Sign in to start managing your projects.</p>
                    </div>
                  <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label> <!-- Added label -->
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
            placeholder="Example@email.com" value="{{ old('email') }}" required>
        @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label> <!-- Added label -->
        <input type="password" class="form-control" name="password" id="password"
            placeholder="At least 8 characters" required>
    </div>

    <div class="d-flex justify-content-end mb-3">
        <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
    </div>

    <div class="d-grid mb-3">
        <button type="submit" class="btn-signin">Sign in</button>
    </div>

     {{-- <div class="text-center my-3">
                            <p class="text-muted">Or</p>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="button" class="btn btn-outline-primary">
                                <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Google" width="20" class="me-2"> Sign in with Google
                            </button>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="button" class="btn btn-outline-primary">
                                <img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" alt="Facebook" width="20" class="me-2"> Sign in with Facebook
                            </button>
                        </div> --}}

    <div class="text-center">
        <p>Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Sign Up</a></p>
    </div>
</form>

                </div>
            </div>

            <div class="col-md-5 text-center">
                <img src="{{ asset('images/Group 212.webp') }}" alt="Your Image" class="img-fluid">
            </div>
        </div>
    </div>
@endsection

