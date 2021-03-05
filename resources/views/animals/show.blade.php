<x-fullapp-layout>

	<x-slot name="title">
		Animal
	</x-slot>

	<x-slot name="header">

	</x-slot>



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

</x-fullapp-layout>
