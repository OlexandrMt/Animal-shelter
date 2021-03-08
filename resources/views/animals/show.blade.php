
<x-fullapp-layout>

  <x-slot name="title">
    Kitty
  </x-slot>
<!-- <div class="container-fluid bg-1 text-center">
  <h3 class="margin"> {{ $animal->name }}</h3>
  <img src="{{asset("storage/" .$animal->photo) }}" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
	<p class="card-text"> Порода: {{ $animal->breed }} </p>
  <p class="card-text">Вік: {{ $animal->age }} </p>
    <p class="card-text">Стать: @if(is_null($animal->sex))
    Не вказано
    @elseif($animal->sex==1)
    Cамець
    @else
    Самка
    @endif </p>
	<p class="card-text"> Статус: @if(is_null($animal->status))
      Не вказано
      @elseif($animal->status==1)
      Прихищений
      @else
      Вільний
      @endif </p>
</div> -->

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="{{asset("storage/" .$animal->photo) }}" alt="Card image cap">
      <div class="card-body">
      </div>
  </div>
<div class="card">
    <div class="card-body">
      <h2 class="margin"> {{ $animal->name }}</h2>
      <p class="card-text"> Порода:
        @if(is_null($animal->breed))
        Не вказано
        @else {{ $animal->breed}}
      @endif</p>
      <p class="card-text">Вік:
        @if(is_null($animal->age))
        Не вказано
        @else {{ $animal->age}}
        @endif
      </p>
      <p class="card-text">Стать: @if(is_null($animal->sex))
      Не вказано
      @elseif($animal->sex==1)
      Cамець
      @else
      Самка
      @endif </p>
      <p class="card-text"> Статус: @if(is_null($animal->status))
      Не вказано
      @elseif($animal->status==1)
      Прихищений
      @else
      Вільний
      @endif </p>
      <p class="card-text">Моя історія:  </p>
    </div>
  </div>
</div>

</x-fullapp-layout>
