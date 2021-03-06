
<x-fullapp-layout>

  <x-slot name="title">
    Kitty
  </x-slot>

<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Моє ім'я: {{ $animal->name }}</h3>
  <img src="{{asset("storage/" .$animal->photo) }}" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
	<p class="card-text"> Порода: {{ $animal->breed }} </p>
  <p class="card-text">Вік: {{ $animal->age }} </p>
  <p class="card-text">Стать: {{ $animal->sex }} </p>
	<p class="card-text"> Статус: {{ $animal->status }} </p>
</div>



</x-fullapp-layout>
