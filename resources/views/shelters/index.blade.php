<x-fullapp-layout>


      <x-slot name="title">
        Shelter
      </x-slot>




  <x-slot name="header">

  </x-slot>




  <div class="content">

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

      @foreach($shelters as $shelter)
          <div class="col">
            <div class="card mb-4 shadow-sm">
            <div class="card-header">
              <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
            </div>
            <div class="card-body">
              <div class="img-round">
                @if($shelter->logo==NULL) @php $shelter->logo = "images/shalter_logos/defaultimg.jpg" @endphp  @endif
                <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
              </div>

              <ul class="list-unstyled mt-3 mb-4">
                <li>&nbsp;{{$shelter->address}}&nbsp;</li>
                <li>&nbsp;{{$shelter->mail}}&nbsp;</li>
                <li>&nbsp;{{$shelter->phone}}&nbsp;</li>
              </ul>
              <form action="shelters/{{$shelter->id}}" method="get">
                    <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Look closer</button>
              </form>
            </div>
          </div>
          </div>
      @endforeach
    </div>
  </div>


</x-fullapp-layout>
