<x-fullapp-layout>
	<x-slot name="title">
		Home
	</x-slot>

	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>

	<!-- <div class="container">
		<div class="row">
			@foreach ($animals as $animal)
			<div class="col-sm-4" >
        <div class="card-group">
          <div class="card mb-4 shadow-sm" width="304" height="205">
				<div class="card-body" >
          <div class="img mt-0 mb-3" >
          <img src="{{asset("storage/" .$animal->photo) }}" class="card-img-top" alt="...">
          </div>
					<h4 class="card-title"> Імя: {{ $animal->name }}</h4>
					<p class="card-text"> Вік: {{ $animal->age }}</p>
					<a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn btn-dark">Детальна інформація</a>
				</div>
			</div>
      </div>
      </div>
			@endforeach
		</div>
	</div> -->


  <div class="content">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      @foreach($animals as $animal)
          <div class="card-group">
            <div class="card mb-4 shadow-sm">
            <div class="card-body d-flex flex-column">
              <div class="img-square">
                    <img src="{{asset("storage/" .$animal->photo) }}" class="card-img-top" alt="...">
              </div>
              <h4 class="card-title">  {{ $animal->name }}</h4>
              <ul class="list-unstyled mt-3 mb-4">
                <!-- <p class="card-text"> Вік: {{ $animal->age }}</p> -->
                <div class="mt-auto">
                  <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn btn-dark">Детальна інформація</a>
                </div>
              </ul>
              </div>
          </div>
          </div>
      @endforeach
    </div>
  </div>




</x-fullapp-layout>
