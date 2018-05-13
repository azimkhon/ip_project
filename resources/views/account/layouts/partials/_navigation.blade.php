<aside class="menu">
	<p class="menu-label">MyDashboard</p>

	<ul class="menu-list">
		<li><a href="{{ route('account.files.index') }}">My files</a></li>
		<li><a href="{{ route('account.files.create.start') }}">Sell a file</a></li>
	</ul>
	<p class="menu-label">General</p>

	<ul class="menu-list">
		<li><a href="#">My details</a></li>
		<li><a href="{{ route('password.request') }}">Change password</a></li>
	</ul>	

</aside>