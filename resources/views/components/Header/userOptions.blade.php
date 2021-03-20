<ul class="userOptions" style="max-width:300px">
	<a href="/shelters/create"><li >Створити Притулок</li></a>
	<a href="/shelters/my"><li >Мої Притулки</li></a>
	<a href="/notifications"><li>Мої Повідомлення</li></a>
	@if(Auth::check())
		<li class="logout"><a href="#">Вихід</a></li>
	@else
		<li class="login"><a href="#">Вхід</a></li>
	@endif
</ul>
