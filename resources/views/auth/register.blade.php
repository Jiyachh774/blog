@extends('layouts.frontend.app')

@section('title', 'Register')

@section('content')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title fw-bold">Register</h2>
                    <p>Register With Us</p>
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

                    <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="error-container"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Avatar</label>
                                    <input type="file" class="form-control form-control-avatar" name="avatar" id="avatar" placeholder="add avatar file here">

                                    @error('avatar')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control form-control-name" name="first_name" id="first_name" placeholder="Type First Name here" required>

                                    @error('first_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control form-control-name" name="last_name" id="last_name" placeholder="Type Last Name here" required>

                                    @error('last_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

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
                                    <label>Phone</label>
                                    <input type="tel" class="form-control form-control-phone" name="phone" id="phone" placeholder="Type phone here">

                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control form-control-address" name="address" id="address" placeholder="Type address here">

                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-subject" name="password" id="password" placeholder="Type password here" required>

                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control form-control-subject" name="password_confirmation" id="password_confirmation"
                                        placeholder="Confirm password here" required>

                                    @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="mt-4">
                            <span>Already have an account?</span>
                            <a href="{{ route('login') }}">Login</a>
                        </div>

                        <div class="text-center">
                            <br>
                            <button class="btn btn-primary solid blank" type="submit">
                                Register
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

@endsection
