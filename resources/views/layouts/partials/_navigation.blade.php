<!-- AZIMKHON VISIT THIS PAGE https://bulma.io/documentation/components/navbar/ -->

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
</script>
<nav class="navbar is-transparent">

  <div class="navbar-brand">

    <a class="navbar-item" href="{{ route('home') }}">
    	{{ config('app.name') }}
    </a>
    
    <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
      <span></span>
      <span></span>
      <span></span>
    </div>    
  </div>

 <div id="navbarExampleTransparentExample" class="navbar-menu">
    <!-- navbar start, navbar end -->
<div class="navbar-start">
	<a class="navbar-item">Home</a>
</div>

<div class="navbar-end">
	<div class="navbar-item">
		<div class="field is-grouped">
          <p class="control">
          	@if(auth()->check())
				<a href="#" class="navbar-item" onclick="event.preventDefault();document.getElementById('logout').submit();">Sign out</a>
		  </p>

		  <p class="control">
		  		<a href="{{ route('account') }}" class="navbar-item">Your Account</a>
		  </p>
		  	<!-- checking whether users role admin or not, so that in admin panel it will appear -->

		  	@role('admin')
		  	<p class="control">
		  		<a href="{{ route('admin.index')}}" class="navbar-item">Admin</a>
		  	</p>
		  	@endrole
		@else

			<p class="control">			
		    <a href="{{ route('login')}}" class="navbar-item">Sign in</a>
			</p>

			<p class="control">
		   		 <a href="{{ route('register')}}" class="button">Start Deal
		   		 </a>
		    </p>

		@endif 
	  </div>    

  </div>
</div>
</div>

</nav>

<form id="logout" method="POST" action="{{ route('logout') }}" class="is-hidden">{{ csrf_field() }}
</form>





