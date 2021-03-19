<ul class="userOptions">
	<li><a href="/shelters/create">Створити Притулок</a></li>
	<li><a href="/shelters/my">Мої Притулки</a></li>
	@if(Auth::check())
		<li class="logout">Вихід</li>
	@else
		<li class="login">Вхід</li>
	@endif
</ul>
