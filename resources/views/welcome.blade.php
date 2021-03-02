<x-app-layout>
	<x-slot name="head">
		<x-head.head>
			<x-slot name="headCommon">
				<x-head.headCommon title="Home"/>
			</x-slot>
			<link rel="stylesheet" href="./css/styles.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		</x-head.head>
	</x-slot>

	<x-slot name="header">
    <x-header.header-combined/>
  </x-slot>

	  <x-auth-validation-errors class="text-center" :errors="$errors" />
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
</x-app-layout>
