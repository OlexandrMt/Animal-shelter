
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


	<!-- <div class="container">
	  <div class="row">

	    <div class="col-sm-4" >
	      	      <img src="{{asset("storage/" .$animal->photo) }}" class="card-img-top" alt="...">
	      <div class="card-body" >

	        <h4 class="card-title"> Імя:{{ $animal->name }}</h4>
	        <p class="card-text"> Вік:{{ $animal->age }}</p>
	      </div>
	    </div>
	  </div>
	</div> -->
	<div class="container-fluid bg-1 text-center">
	  <h3 class="margin">Who Am I?</h3>
	  <img src="{{asset("storage/" .$animal->photo) }}" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
	  <!-- <h3>I'm an adventurer</h3> -->
		<h5 class="card-title">Імя:{{ $animal->name }}</h5>
		<p class="card-text">Вік:{{ $animal->age }} </p>
		<p class="card-text">Стать:{{ $animal->sex }} </p>

	</div>


  <div class="card mb-3" style="max-width: 800px;">

    <div class="row g-0">
      <div class="col-md-10">
        <img src="{{asset("storage/" .$animal->photo) }}" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Імя:{{ $animal->name }}</h5>
          <p class="card-text">Вік:{{ $animal->age }} </p>
          <p class="card-text">Стать:{{ $animal->sex }} </p>
          <p class="card-text"><small class="text-muted">!!!!</small></p>
        </div>
      </div>
    </div>
  </div>
	<div class="jumbotron text-center" style="margin-bottom:0">
	  <p>Притулок для тварин</p>
	  <p>Ми знаходимось за адресою:</p>
		<p>м.Вінниця, провулок Цегельний, 12</p>
	  <p>Наш телефон: +38-067-431-74-24</p>
	</div>

</x-app-layout>
