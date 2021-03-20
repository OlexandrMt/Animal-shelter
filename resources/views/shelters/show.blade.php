<x-fullapp-layout>

  <x-slot name="title">
    Shelters
  </x-slot>

  <x-slot name="head">

  </x-slot>

<div class="container">

  @if(!empty ($shelter))
  <div class="row mb-3 ">
    <div class="col-md-4 text-center product-item">
      <div class="card mb-4 shadow-sm">
      <div class="card-header product-title">
        <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
      </div>
      <div class="card-body">
        <div class="img-round mb-3">
          @isset($shelter->logo)
            <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
          @else
            <img src="{{asset('images/default_logo.jpg')}}" alt="" title="">
          @endisset
        </div>

        @if($shelter->user_id == $user)
          <form action="{{route('shelters.edit', $shelter->id)}}" method="get">
                <button type="submit" class="w-75 btn btn-new mb-1">Редагувати <i class="fa fa-wrench"></i></button>
          </form>
          <form action="{{route('animals.create')}}" method="get">
                <input type="hidden" name="shelter_id" value='{{$shelter->id}}' >
                <button type="submit" class="w-75 btn btn-new">Додати тварину <i class="fa fa-paw"></i></button>
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
      <!--
        <h4  class="my-0 fw-normal"><b>Наші тварини</b></h4>
      -->
        <div class="row mb-3 ">
          <div class="col-md-12 text-center">
            <div class="card-header ">
                <div id="our-animals-anchor" class="row">
                      <div class="col-md-12">
                        <h2> Наші тварини </h2>
                      </div>
                  </div>
          </div>
          </div>
            @foreach($animals as $animal)
              <div class="col-sm-6 col-md-4">
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
            </div>
          @endforeach
          <div class="col-sm-12">
              <div class="product-view">
                <div class="container-fluid">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                          {{ $animals->links() }}
                    </ul>
                </nav>
              </div>
            </div>
          </div>


    @if($animals->isEmpty())
      <div class="m-4">Притулок пустий =)</div>
    @endif
    </div>
  </div>
  @else
  <h2 class="text-center">Притулку не існує</h2>
  @endif

</div>

</x-fullapp-layout>
