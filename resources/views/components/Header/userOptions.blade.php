<ul class="userOptions">
	<li><a href="/shelters/create">Створити Притулок</a></li>
	<li><a href="/shelters/my">Мої Притулки</a></li>
	<li><a href="/notifications">Мої Повідомлення</a></li>
	@if(Auth::check())
		<li class="logout"><a href="#">Вихід</a></li>
	@else
		<li class="login"><a href="#">Вхід</a></li>
	@endif
</ul>
