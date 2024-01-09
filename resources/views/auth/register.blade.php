@extends('layouts.auth')
@section('content')
    <div class="row mt-5 pt-5">
        <div class="col-md-12">
            <h3 class="text-center">Cadastro para o sistema</h3>
            <div class="card">
                <div class="card-header bg-secondary">
                    <h5 class="text-center text-light">Registre-se</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group my-1">
                            <label for="email">Email</label>
                            <input type="email" name="email"
                                class="form-control @error('email') 
                                is-invalid
                            @enderror"
                                required value="{{ old('email') }}" placeholder="Email Adreess">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group my-1">
                            <label for="name">Name</label>
                            <input type="name" name="name" required
                                class="form-control @error('name')
                                is-invalid
                            @enderror"
                                value="{{ old('name') }}" placeholder="Name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group my-1">
                            <label for="password">Password</label>
                            <input type="password" name="password" required
                                class="form-control @error('password')
                                is-invalid
                            @enderror"
                                value="{{ old('password') }}" placeholder="Password" autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group my-1">
                            <label for="password_confirmation">Email</label>
                            <input type="password" name="password_confirmation"
                                class="form-control @error('password_confirmation')
                                is-invalid
                            @enderror"
                                value="{{ old('password_confirmation') }}" placeholder="Confirm Password"
                                autocomplete="new-password" required>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-1">
                                    <button type="submit" class="btn btn-warning float-left">Register</button>
                                </div>
                            </div>
                            <div class="col-md-6 mt-1">
                                <a href="{{ route('login') }}" class="btn btn-dark float-right"> Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
