@extends('account.layouts.default')

@section('account.content')
	<h2>My details:</h2>
	<br>
	<h3>
	<ul class="menu-list">
		{{ csrf_field() }}
		<li>Name: {{$user->name}} </li>
		<li>Email: {{$user->email}}</li>
	</ul>
	</h3>
	
@endsection