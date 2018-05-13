@extends('layouts.app')

@section('content')

<section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    
                    @if(session('status'))
                    <div class="notification is-success">
                        {{ session('status')}}
                    </div>
                    @endif
                    
                    <h1 class="title">Password recovery</h1>

                    <form action="{{ route('password.email') }}" method="POST" class="form">
                        {{ csrf_field() }}

                        <div class="field">
                            
                            <label for="email" class="label">Email</label>
                            <p class="control">
                                <input type="email" name="email" id="email" placeholder="e.g. student@mailinha.uz" class="input{{$errors->has('email') ? ' is-danger' : ''}}" value="{{ old('email') }}">
                            </p>

                            @if($errors->has('email'))
                                <p class="help is-danger">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>
                        
                        
                        <div class="field">
                            <p class="control">
                                <button class="button is-info">Send email</button>
                            </p>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
