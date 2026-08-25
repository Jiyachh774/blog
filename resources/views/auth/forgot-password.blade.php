@extends('layouts.frontend.app')

@section('title', 'Forgot Password')

@section('content')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title fw-bold">Reset Password</h2>
                    <p>Forgot your password?</p>
                </div>
            </div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="gap-40"></div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <p>
                        Forgot your password? No problem. Enter your email address
                        and we will send you a password reset link.
                    </p>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control form-control-email" id="email" value="{{ old('email') }}" placeholder="Type email here"
                                required autofocus>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <br>
                            <button class="btn btn-primary solid blank" type="submit">
                                Email Password Reset Link
                            </button>
                        </div>
                        <div class="text-center mt-4">
                            <a href="{{ route('login') }}">
                                Return to Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
