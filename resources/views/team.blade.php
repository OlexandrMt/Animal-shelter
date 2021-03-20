<x-fullapp-layout>
	<x-slot name="title">
		Our team
	</x-slot>


	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>


	<div class="featured-product product">
			<div class="container-fluid">
					<div class="section-header">
							<h1>Наша команда</h1>
					</div>
					<div class="row align-items-center product-slider product-slider-4">

					@foreach($teams as $team)
													<div class="col-lg-3">
															<div class="product-item">
																	<div class="product-title">
																			<a > {{ ($team["name"]) }}</a>
																			<div class="ratting">

																			</div>
																	</div>
																	<div class="product-image">
																		<a >
																				<img src="{{ ($team["ava"]) }}" class="" alt="...">
																		</a>
																	</div>
																	<div class="product-price">
																			<h3><span></span></h3>

																	</div>
															</div>
													</div>
													@endforeach
					</div>
			</div>
	</div>



<!-- <h1 class="text"><i> Наша команда </i></h1>



<div class="container">
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
 -->



</x-fullapp-layout>
