<header>
	<div>
		{{$slot}}
	</div>
		<nav class="navbar">
			@if(@isset($menuBtn))
				{{$menuBtn}}
			@endif
			@if(@isset($menuItems))
				{{$menuItems}}
			@endif
			@if(@isset($optionsBtn))
				{{$optionsBtn}}
			@endif
			@if(@isset($userOptions))
				{{$userOptions}}
			@endif
		</nav>
</header>
