@extends('layouts.app')

@section('content')
<<<<<<< HEAD 

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
=======
<<<<<<< HEAD

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
>>>>>>> ab432e609307192c0b8ea130924a3c319030295b
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
=======
=======
<div class="hero-body">
	<div class="container has-text-centered">
		<h1 class="title is-1">
			Buy and sell files
		</h1>
	</div>
>>>>>>> 6633753e290c8a6ce781a5b522f73b8c74a238a7
>>>>>>> ab432e609307192c0b8ea130924a3c319030295b
</div>
@endsection
