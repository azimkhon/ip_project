@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
=======
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
=======
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373

<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title">Sign in</h1>
                <form action="#" method="post" class="form">
                    {{csrf_field()}}

                    <div class="field">
                        <label for="email" class="label">Email</label>
                        <p class="control">
                            <input type="email" name="email" id="email" placeholder="e.g. aziz@gmail.com" class="input {{$errors->has('email') ? 'is-danger' : ''}}" value="{{old('email')}}">
                        </p>

                        @if ($errors->has('email'))
                            <p class="help is-danger">
                                {{$errors->first('email')}}
                            </p>
                        @endif

                    </div>

                    
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input type="password" name="password" id="password" class="input {{$errors->has('password') ? 'is-danger' : ''}}">
                        </p>

                        @if ($errors->has('password'))
                            <p class="help is-danger">
                                {{$errors->first('password')}}
                            </p>
                        @endif
                    </div>

<<<<<<< HEAD
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
=======
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                    </label>
                                </div>
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
=======
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
=======
                    <div class="field ">
                        <p class="control">
                            <label class="checkout" for="remember">
                                <input type="checkbox" name="remember" id="remember" checked>
                                Remember me
                            </label>
                        </p>
                        
                    </div>

                    <div class="field is-grouped">
                        <p class="control">
                            <button class="button is-primary">Sign in</button>
                        </p>
                        <p>
                            <a href="{{route('password.request')}}">Reset password</a>
                        </p>
                    </div>

                </form>
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373
            </div>
        </div>
    </div>
</section>

@endsection
