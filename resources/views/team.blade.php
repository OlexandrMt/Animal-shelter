<x-fullapp-layout>
	<x-slot name="title">
		Our team
	</x-slot>


	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>

<h1 class="text"><i> Наша команда </i></h1>



<div class=".container">
  <div class="row">
@foreach($teams as $team)
  <div class="card border-light mb-3" style="max-width: 650px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ ($team["ava"]) }}" class="rounded-circle" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title">  {{ ($team["name"]) }}</h4>
      </div>
    </div>
  </div>
</div>
@endforeach
</div>
</div>


<!-- <div class="card" style="width: 18rem;">
  <img src="images/unnamed.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-text"> Моє імя</h5>
  </div>
</div> -->

</x-fullapp-layout>
