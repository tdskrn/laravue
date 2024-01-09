@extends('layouts.auth')

@section('content')
    <div class="row mt-5 pt-5">
        <div class="col-md-12">
            <h3 class="text-center">Reset your password</h3>
            @if (session('status'))
                <div class="text-success">
                    {{ session('status') }}
                </div>
            @endif()
            <div class="card">
                <div class="card-header bg-secondary">
                    <h5 class="text-center text-light">Insert a valid e-mail</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('password.email') }}" method="POST">
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
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-1">
                                    <button type="submit" class="btn btn-warning">
                                        Reset Link
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group my-1">
                                    <a href="{{ route('login') }}" class="btn btn-dark"> Go to Login</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
