<x-fullapp-layout>

  <x-slot name="title">
    Kitty
  </x-slot>

<div class="container">
  <div class="row">
    @foreach ($animals as $animal)
    <div class="col-sm-4" >
            <img src="{{asset("storage/" .$animal->photo) }}" class="card-img-top" alt="...">
      <div class="card-body" >
              <h4 class="card-title"> {{ $animal->name }}</h4>
        <p class="card-text">Age:{{ $animal->age }}</p>
        <a href="#" class="btn btn-dark">See more</a>
      </div>
    </div>
    @endforeach
</x-fullapp-layout>
