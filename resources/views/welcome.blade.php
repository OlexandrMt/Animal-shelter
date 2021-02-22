<x-layout>
	<x-slot name="head">
		<x-head.head>
			<x-slot name="headCommon">
				<x-head.headCommon title="Home"/>
			</x-slot>
			<link rel="stylesheet" href="./css/styles.css">
		</x-head.head>
	</x-slot>
	
	<x-slot name="header">
		<x-header.header>
			<x-slot name="menuBtn">
				<x-header.menuBtn/>
			</x-slot>
			<x-slot name="menuItems">
				<x-header.menuItems/>
			</x-slot>
			<x-slot name="optionsBtn">
				<x-header.optionsBtn/>
			</x-slot>
			<x-slot name="userOptions">
				@if(Auth::check())
					<x-header.userOptions loginClass="logout" loginBtnText="Log Out"/>
				@else
					<x-header.userOptions loginClass="login" loginBtnText="Log In"/>
				@endif
			</x-slot>
		</x-header.header>
	</x-slot>
	
	@if(!Auth::check())
		<x-slot name="auth">
			<x-auth.auth hidden="hidden" active="">
				<x-slot name="closeBtn">
					<x-auth.closeBtn/>
				</x-slot>
			</x-auth.auth>
		</x-slot>
	@endif
	
	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>
	
</x-layout>