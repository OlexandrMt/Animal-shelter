@extends('layouts.app')

@section('title')
Animal-shelters
@endsection
@section('content')


<div class="container">
  <div class="row">
    @foreach ($animals as $animal)
    <div class="col-sm-4" >
      <!-- <img src="{{$animal["ava"]}}" class="card-img-top" alt="..."> -->
      <img src="{{asset("storage/" .$animal->photo) }}" class="card-img-top" alt="...">
      <div class="card-body" >
        <!--<p class="card-text" >Animal's name</p>
        <form action="#" method="get">
        <input type="submit" value="Animal">
        </form>
        <button type="button" class="btn btn-success">Success</button>!-->
        <!-- <h4 class="card-title"> {{$animal["name"]}}</h4> -->
        <!-- <p class="card-text">Age:{{$animal["age"]}}</p> -->
        <h4 class="card-title"> {{ $animal->name }}</h4>
        <p class="card-text">Age:{{ $animal->age }}</p>
        <a href="#" class="btn btn-dark">See more</a>
      </div>
    </div>
    @endforeach


    <!--<div class="col-sm-4">
      <img src="/images/Screenshot.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h4 class="card-title">Nickname</h4>
        <p class="card-text">Age:</p>
        <a href="#" class="btn btn-dark">See more</a>
      </div>
    </div>-->

  </div>
</div>


<!--<div class="card" style="width: 18rem;">
  <img src="/images/Screenshot.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Animal's name</p>
  </div>
</div>-->
@endsection
