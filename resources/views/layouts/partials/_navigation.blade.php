<!-- AZIMKHON VISIT THIS PAGE https://bulma.io/documentation/components/navbar/ -->


<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
	<div class="container">
  <div class="navbar-brand">

    <a class="navbar-item" href="{{ route('home') }}">{{ config('app.name') }}</a>

  </div>

  <div class="navbar-menu">
    <!-- navbar start, navbar end -->
	 <div class="navbar-start">
		<a class="navbar-item">Home</a>

		<a class="navbar-item">Files</a>
		<a class="navbar-item">Deals</a>

	  </div>

	  <div class="navbar-end">
	  	@if(auth()->check())
		  	<a href="#" class="navbar-item" onclick="event.preventDefault();document.getElementById('logout').submit();">Sign out</a>
		  	<a href="{{ route('account') }}" class="navbar-item">Your Account</a>

		  	<!-- checking whether users role admin or not, so that in admin panel it will appear -->

		  	@role('admin')
		  	<a href="{{ route('admin.index')}}" class="navbar-item">Admin</a>
		  	@endrole
		@else
		    <a href="{{ route('login')}}" class="navbar-item">Sign in</a>
		    <div class="navbar-item"><a href="{{ route('register')}}" class="button">Start Deal</a></div>
		@endif 
	  </div>    

  </div>
</div>
</nav>

<form id="logout" method="POST" action="{{ route('logout') }}" class="is-hidden">{{ csrf_field() }}
</form>






