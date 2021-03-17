<x-fullapp-layout>


      <x-slot name="title">
        Shelter
      </x-slot>

  <x-slot name="header">

  </x-slot>


  <div class="content">

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

      @foreach($shelters as $shelter)
          <div class="card-group">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
            </div>
            <div class="card-body d-flex flex-column">
              <div class="img-round mt-0 mb-3" >
                @isset($shelter->logo)
                  <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
                @else
                  <img src="{{asset('images/default_logo.jpg')}}" alt="" title="">
                @endisset
              </div>

              <ul class="list-unstyled mt-3 mb-4">
                  <li >&nbsp;{{$shelter->address}}&nbsp;</li>
                  <li>&nbsp;{{$shelter->mail}}&nbsp;</li>
                  <li>&nbsp;{{$shelter->phone}}&nbsp;</li>
              </ul>
              <div class="mt-auto">
              <form  action="/shelters/{{$shelter->id}}" method="get">
                    <button type="submit" class="w-75 btn btn-dark">Детальніше</button>
              </form>
            </div>
            </div>
          </div>
          </div>
      @endforeach
    </div>
  </div>


</x-fullapp-layout>
