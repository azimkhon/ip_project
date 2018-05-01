<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials._head')
</head>
<body>
    <div id="app">
    	<section class="hero is-primary is-large">

    		<div class="hero-head">
    		@include('layouts.partials._navigation')
    		</div>
	
			
		</section>
		@yield('content')
	</div>
	
    @include('layouts.partials._scripts')
</body>
</html>
