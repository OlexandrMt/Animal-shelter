<ul class="userOptions">
	<li><a class="menuItems-a" href="/shelters/create">CreateShelter</a></li>
	<li><a class="menuItems-a" href="/shelters/my">MyShelter</a></li>
	@if(Auth::check())
		<li class="logout">Log Out</li>
	@else
		<li class="login">Log In</li>
	@endif
</ul>
