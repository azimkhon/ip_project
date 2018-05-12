<form action="#" method="post">
	{{csrf_field()}}

	<span class="field has-addons">
		<p class="control">
			<input class="input" type="email" name="email" id="email" required placeholder="youraddress@email.com" value="{{old('email')}}">
		</p>
		<p class="control">
			<button class="button is-primary">
				Download for free
			</button>
		</p>
	</span>
	@if($errors->has('email'))
		<p class="help in-danger">{{ $errors->first('email')}}</p>
	@endif
</form>