@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
=======
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
=======
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373

<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <h1 class="title">Create account for selling</h1>
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

<<<<<<< HEAD
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
=======
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
=======
                    </div>

                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input type="text" name="name" id="name" placeholder="e.g. Aziz" class="input {{$errors->has('name') ? 'is-danger' : ''}}" value="{{old('name')}}">
                        </p>
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373

                        @if ($errors->has('name'))
                            <p class="help is-danger">
                                {{$errors->first('name')}}
                            </p>
                        @endif
                    </div>

<<<<<<< HEAD
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
=======
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
=======
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
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373

                    <div class="field">
                        <p class="control">
                            <button class="button is-primary">Sign up</button>
                        </p>
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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
=======
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
=======
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
=======
                </form>
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373
            </div>
        </div>
    </div>
</section>

@endsection
