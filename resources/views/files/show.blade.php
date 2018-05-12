@extends('layouts.plain')

@section('content')
	<section class="hero is-medium is-info">
		<div class="hero-body">
			<div class="container">
				<h3 class="subtitle is-spaced">
					<strong>{{$file->user->name}}</strong> is selling
				</h3>
				<h1 class="title is-1 is-spaced">{{$file->title}}</h1>
				<h3 class="subtitle">
					{{ $file->overview_short}}
				</h3>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="container">
			<div class="content">
				<div class="columns">
					<div class="column">
						<h1 class="title">Overview</h1>
						<p>{{ $file->overview}}</p>
					</div>
					<div class="column">50%</div>				
				</div>
			</div>
		</div>
	</section>
@endsection