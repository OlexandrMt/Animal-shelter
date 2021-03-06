<x-fullapp-layout>
	<x-slot name="title">
		Home
	</x-slot>


	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>


	<div class="container">
		<div class="row">
			@foreach ($animals as $animal)
			<div class="col-sm-4" >
								<img src="{{asset("storage/" .$animal->photo) }}" class="card-img-top" alt="...">
				<div class="card-body" >

					<h4 class="card-title"> Імя: {{ $animal->name }}</h4>
					<p class="card-text"> Вік: {{ $animal->age }}</p>
					<a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn btn-dark">Детальна інформація</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>


</x-fullapp-layout>
