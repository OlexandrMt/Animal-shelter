<<<<<<< HEAD
<img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
<form action="{{route('shelters.edit', $shelter->id)}}" method="get">
  <div>
    @csrf
    <input type="submit" value="Edit">
  </div>
</form>
<?php
    echo $shelter;
    echo "<br>";
    echo $shelter->logo;
?>
=======
<x-fullapp-layout>

  <x-slot name="title">
    Shelters
  </x-slot>

  <x-slot name="head">

  </x-slot>

  <x-auth-validation-errors class="mb-4" :errors="$errors" />


@if(!empty ($shelter))
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
  <div class="col" style="margin: auto;">
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
        <form action="" method="get" style="margin-bottom: 1em;">
              <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Our animals</button>
        </form>
      @if($shelter->user_id == $user)
        <form action="{{route('shelters.edit', $shelter->id)}}" method="get">
              <button type="submit" class="w-100 btn btn-lg btn-outline-primary">Edit</button>
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
>>>>>>> dev
