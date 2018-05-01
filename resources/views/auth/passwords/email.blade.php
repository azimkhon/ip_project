@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
=======
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                    @if (session('status'))
                        <div class="alert alert-success">
=======
    <section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    
                    @if(session('status'))
                        <div class="notification is-success">
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
<<<<<<< HEAD
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
=======
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
=======
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
                                </button>
                            </div>
=======
                    <h1 class="title">Recover your password</h1>
                    <form action="{{ route('password.email') }}" method="post" class="form">
                        {{ csrf_field() }}

                        <div class="field">
                            <label for="email" class="label">Email</label>
                            <p class="control">
                                <input type="email" name="email" id="email" placeholder="e.g. aziz@gmail.com" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" value="{{ old('email') }}">
                            </p>
                            @if ($errors->has('email'))
                                <p class="help is-danger">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="field">
                            <p class="control">
                                <button class="button is-primary">Send email</button>
                            </p>
>>>>>>> d96a4e6f32011b7469548f6982480119d77df373
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
