<ul class="userOptions">
	<li><a class="menuItems-a" href="/shelters/create">Створити Притулок</a></li>
	<li><a class="menuItems-a" href="/shelters/my">Мої Притулки</a></li>
	@if(Auth::check())
		<li class="logout">Log Out</li>
	@else
		<li class="login">Log In</li>
	@endif
</ul>
