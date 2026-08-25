@extends('layouts.frontend.app')

@section('title', 'login')

@section('content')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title fw-bold">Login</h2>
                    <p>Login With Us</p>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="gap-40"></div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ route('login') }}" method="post" role="form">
                        @csrf
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control form-control-email" name="email" id="email" placeholder="Type email here" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type ="password" class="form-control form-control-subject" name="password" id="password" placeholder="Type password here" required>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded" name="remember">
                                <span class="ms-2">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="mt-4">
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="text-center"><br>
                            <button class="btn btn-primary solid blank" type="submit">Login</button>
                        </div>
                    </form>
                </div>

            </div><!-- Content row -->
        </div><!-- Conatiner end -->
    </section><!-- Main container end -->
@endsection
