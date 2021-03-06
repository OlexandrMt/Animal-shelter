<x-fullapp-layout>

  <x-slot name="title">
    Shelters
  </x-slot>

  <x-slot name="head">

  </x-slot>




@if(!empty ($shelter))
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
  <div class="col m-auto">
    <div class="card mb-4 shadow-sm">
    <div class="card-header">
      <h4 class="my-0 fw-normal">{{$shelter->name}}</h4>
    </div>
    <div class="card-body">
      <div class="img-round">
        @if($shelter->logo==NULL) @php $shelter->logo = "images/shalter_logos/defaultimg.jpg" @endphp  @endif
        <img src="{{ asset("storage/".$shelter->logo) }}" >
      </div>

      <ul class="list-unstyled mt-3 mb-4">
        <li>{{$shelter->address}}</li>
        <li>{{$shelter->mail}}</li>
        <li>{{$shelter->phone}}</li>
      </ul>
        <form class="mb-2" action="/shelters/{{$shelter->id}}/animals" method="get" ">
              <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Our animals</button>
        </form>
      @if($shelter->user_id == $user)
        <form action="{{route('shelters.edit', $shelter->id)}}" method="get">
              <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Edit shelter</button>
        </form>
        <form action="{{route('animals.create')}}" method="get">
              <input type="hidden" name="shelter_id" value='{{$shelter->id}}' >
              <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Add animal</button>
        </form>
      @endif
    </div>
  </div>
  </div>
</div>

@else
<h2 class="text-center">Shelter do not exist</h2>
@endif

</x-fullapp-layout>
