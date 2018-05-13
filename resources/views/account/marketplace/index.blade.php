@extends('account.layouts.default')

@section('account.content')
	
<h2><a href="https://connect.stripe.com/oauth/authorize?response_type=code&client_id={{config('services.stripe_connect.key')}}&scope=read_write">Connect your stripe account to work with payment system</a></h2>

@endsection

<!--https://dashboard.stripe.com/oauth/authorize?response_type=code&client_id=ca_CqiehzPv27rIqqWyhi8PyUDxMGMwqIgi&scope=read_write

https://dashboard.stripe.com/oauth/authorize?response_type=code&state=abc&scope=read_write&client_id=