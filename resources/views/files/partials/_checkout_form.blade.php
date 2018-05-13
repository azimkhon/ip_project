<form action="#" method="POST" >
	{{csrf_field()}}	
	{{ $file->price }} USD
	<script src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
	data-key="{{ $file->user->stripe_key}}"
	data-amount="{{$file->price*100}}"
	data-name="{{ $file->title }}"
	data-description="{{$file->overview_short}}"
	data-locale="auto"
	data-currency="usd"
	>
		
	</script>
</form>