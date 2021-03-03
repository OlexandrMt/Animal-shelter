<ul class="userOptions">
	<li><a class="menuItems-a" href="/shelters/create">CreateShelter</a></li>
	<li><a class="menuItems-a" href="/shelters/my">MyShelter</a></li>
	@if(Auth::check())
		<li class="logout"><a href="#">Log Out</a></li>
	@else
		<li class="login"><a href="#">Log In</a></li>
	@endif
</ul>
