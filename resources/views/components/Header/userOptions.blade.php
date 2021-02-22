<ul class="userOptions">
	<li><a href="#">My Shelters</a></li>
	<li><a href="#">Settings</a></li>
	@if(Auth::check())
		<li class="logout"><a href="#">Log Out</a></li>
	@else
		<li class="login"><a href="#">Log In</a></li>
	@endif	
</ul>