@extends('layouts.app')

@section('content')

<section class="section">
        <div class="container is-fluid">
            <div class="columns">
                <div class="column is-half is-offset-one-quarter">
                    <h1 class="title">Contact us</h1>
                    <form action="{{ route('contact') }}" method="POST" class="form">
                    	{{ csrf_field() }}

                    	<div class="field">
                            @if (Session::has('success'))
                     <div class="notification is-info">
  Message was successfully sent
</div>
                        @endif 

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
                    		<label for="subject" class="label">Subject</label>
                    		<p class="control">
                    			<input type="text" name="subject" id="subject" class="input">
                    		</p>
                    	</div>

						<div class="field">
							<label for="message" class="label">Your message</label>
							<p class="control">
								<textarea name="message" id="message" class="textarea"></textarea>
							</p>
						</div>                    	
                        <p class="control">
                            <button class="button is-info">Send message
                            </button>
                        </p>
						
                    </form>
                </div>
            </div>
        </div>
</section>                    

@endsection