<ul class="userOptions">
	<li><a class="menuItems-a" href="/shelters/create">Створення притулку</a></li>
	<li><a class="menuItems-a" href="/shelters/my">Мій притулок</a></li>
	@if(Auth::check())
		<li class="logout">Вихід</li>
	@else
		<li class="login">Вхід</li>
	@endif
</ul>
