<ul class="userOptions">
	<li><a href="#">My Shelters</a></li>
	<li><a href="#">Settings</a></li>
	@if(Auth::check())
		<li class="logout">Log Out</li>
	@else
		<li class="login">Log In</li>
	@endif	
</ul>