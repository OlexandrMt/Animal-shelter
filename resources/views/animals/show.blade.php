
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
@if(session("showNotification"))
	<x-contact.messageStatus/>
@endif
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="{{asset("storage/" .$animal->photo) }}" alt="Card image cap">
      <div class="card-body text-center">
        <form action="/notifications/create" method="get">
          <input type="hidden" name="animal_id" value='{{$animal->id}}'>
          <button type="submit" class="w-75 btn btn-dark mb-1">Хочу собі <i class="fas fa-hands"></i></button>
        </form>
      </div>
  </div>
<<<<<<< HEAD

<div class="card">
=======
  <div class="card">
>>>>>>> dev
    <div class="card-body">
      <h2 class="margin"> {{ $animal->name }}</h2>
      <p class="card-text"> Тип:
        @if(is_null($animal->type))
        Не вказано
        @else {{ $animal->type}}
      @endif</p>
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
      <p class="card-text">Моя історія:
        @if(is_null($animal->description))
        Не вказано
        @else {{ $animal->description}}
        @endif

        <div class="input-group">
        <form action="/animals/{{ $animal->id }}/edit" method="get">
              @csrf
              <!-- <input type="submit" class="btn-success" value=" Редагувати "> -->
              <button type="submit" class="btn btn-dark">Редагувати </i></button>
              @method('GET')
            </form>
        </div>
<br>
        <div class="input-group">
            <form action="/animals/{{ $animal->id }}" method="post">
              @csrf
              <!-- <input type="submit" class="btn-success" value=" Видалити "> -->
              <button type="submit" class="btn btn-dark">Видалити </i></button>
              @method('DELETE')
            </form>

        </div>
       </p>
    </div>

  </div>
</div>
<x-contact.contactAnimal :animalId="$animal->id" :shelterId="$animal->shelter_id" />

</x-fullapp-layout>
