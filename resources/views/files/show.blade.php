@extends('layouts.plain')

@section('content')
	<section class="hero is-medium is-info">
		<div class="hero-body">
			<div class="container">
				@include('layouts.partials._flash')
				
				<h3 class="subtitle is-spaced">
					<strong>{{$file->user->name}}</strong> is selling
				</h3>
				<h1 class="title is-1 is-spaced">{{$file->title}}</h1>
				<h2 class="subtitle">
					{{ $file->overview_short}}
				</h2>
				
				@if($file->isFree())
					@include('files.partials._checkout_form_free', compact('file'))
				@endif
				
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
					<div class="column">
						<h1 class="title">Uploaded files</h1>
						@foreach($uploads as $upload)
							<?php $number = $upload->size/1024;	?>
							<p>{{$upload->filename}} <strong> Size:</strong> {{round($number,2)}} MB</p>
						@endforeach
					</div>				
				</div>
			</div>
		</div>
	</section>
@endsection