<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
	    @include('layouts.partials._head')
	</head>
<body>
    <div id="app">
		@yield('content')
    </div>
    
    <!-- Scripts -->
    @include('layouts.partials._scripts')
</body>
</html>
