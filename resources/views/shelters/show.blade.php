<x-fullapp-layout>

  <x-slot name="title">
    Shelters
  </x-slot>

  <x-slot name="head">

  </x-slot>



@if(!empty ($shelter))
<div class="row mb-3 ">
  <div class="col-md-4 text-center ">
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
    </div>
    <div class="card-body">
      <div class="img-round mb-3">
        @if($shelter->logo==NULL)

        <!-- /*@if($shelter->logo==NULL) @php $shelter->logo = "images/shalter_logos/defaultimg.jpg" @endphp  @endif*/
        <img src="{{ asset("storage/".$shelter->logo) }}" id="logo-preview"> -->

        <img src="http://127.0.0.1:8000/images/default_logo.jpg" alt="" title="">
        @else
        <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
        @endif
      </div>

      @if($shelter->user_id == $user)
        <form action="{{route('shelters.edit', $shelter->id)}}" method="get">
              <button type="submit" class="w-75 btn btn-dark mb-1">Редагувати <i class="fa fa-wrench"></i></button>
        </form>
        <form action="{{route('animals.create')}}" method="get">
              <input type="hidden" name="shelter_id" value='{{$shelter->id}}' >
              <button type="submit" class="w-75 btn btn-dark">Додати тварину <i class="fa fa-paw"></i></button>
        </form>
      @endif
    </div>
  </div>
  </div>

  <div class="col-md-8 text-center">
    <div class="card mb-4 shadow-sm">

    <div class="card-body">
      <ul class="list-unstyled mt-3 mb-4">
        <li><b>Адресса: </b>{{$shelter->address}}</li>
        <li><b>Електронна пошта: </b>{{$shelter->mail}}</li>
        <li><b>Номер телефону: </b>{{$shelter->phone}}</li>
      </ul>
    </div>
  </div>
  </div>
</div>



<div class="card-group text-center">
  <div class="card mb-4 shadow-sm">
    <div class="card-header ">
      <h4 class="my-0 fw-normal"><b>Наші тварини</b></h4>
    </div>
    <div>
      <div class="row row-cols-1 row-cols-md-3 mb-3 ">
        @foreach($animals as $animal)
            <div class="card-group">
              <div class="card m-4 shadow-sm">
                <div class="card-body d-flex flex-column">
                  <div class="img-square w-75">
                    <img src="{{asset("storage/" .$animal->photo) }}" alt="...">
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

  @if($animals->isEmpty())
    <div class="m-4">Притулок пустий =)</div>
  @endif
</div>


@else
<h2 class="text-center">Притулку не існує</h2>
@endif

</x-fullapp-layout>
