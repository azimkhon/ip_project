@extends('account.layouts.default')

@section('account.content')

	<h1 class="title">Make changes to {{ $file->title }}</h1>

	<form action="#" method="post" class="form">
		
		{{ csrf_field() }}

		{{ method_field('PATCH') }}

		<div class="field">
			<p class="control">
				<label for="live" class="checkbox">
					<input type="checkbox" name="live" id="live"{{ $file-> live ? 'checked' : '' }}>
					Live(Public)
				</label>
			</p>
		</div>

		<div class="field">
			<label for="title" class="label">Title</label>
			<p class="control">
				<input type="text" name="title" id="title" class="input{{ $errors->has('title') ? ' is-danger': ''}}" value=" {{ old('title') ? old('title') : $file->title }} ">
			</p>
			
			@if($errors->has('title'))
				<p class="help is-danger">{{ $errors->first('title') }}</p>
			@endif
		</div>

		<div class="field">
			<label for="overview_short" class="label">Short description</label>
			<p class="control">
				<input type="text" name="overview_short" id="overview_short" class="input{{ $errors->has('overview_short') ? ' is-danger': ''}}" value=" {{ old('overview_short') ? old('overview_short') : $file->overview_short }} ">
			</p>
			
			@if($errors->has('overview_short'))
				<p class="help is-danger">{{ $errors->first('overview_short') }}</p>
			@endif
		</div>

		<div class="field">
			<label for="overview" class="label">Description</label>
			<p class="control">
				<textarea name="overview" id="overview" class="textarea{{$errors->has('overview') ? ' is-danger' : ''}}">{{ old('overview') ? old('overview') : $file->overview }}</textarea>
			</p>
			
			@if($errors->has('overview'))
				<p class="help is-danger">{{ $errors->first('overview') }}</p>
			@endif
		</div>

		<div class="field">
			<label for="price" class="label">Price (UZS)</label>
			<p class="control">
				<input type="text" name="price" id="price" class="input{{ $errors->has('price') ? ' is-danger': ''}}" value=" {{ old('price') ? old('price') : $file->price }} ">
			</p>
			
			@if($errors->has('price'))
				<p class="help is-danger">{{ $errors->first('price') }}</p>
			@endif
		</div>

		<div class="field is-grouped">
			<p class="control">
				<button class="button is-primary">Submit</button>
			</p>

			<p>Your file will be reviewed by administrator.</p>
		</div>
	</form>
@endsection