@extends('account.layouts.default')

@section('account.content')
	
<h2><a href="https://connect.stripe.com/oath/authorize?response_type=code&state=abc&scope=read_write&client_id={{ config('services.stripe_connect.key')}}">Connect your stripe account to work with payment system</a></h2>

@endsection