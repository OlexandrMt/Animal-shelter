<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<form action="shelters/create" method="get">
  <input type="submit" value="CreateShelter">
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<main class="container"  style="padding:5%;">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Shelters</h1>
    <p class="lead">Some text</p>
  </div>

  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">

@foreach($shelters as $shelter)

<!-- <a href="{{route('shelters.show', $shelter->id)}}">{{$shelter->name}}<a> -->

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
          <li>{{$shelter->address}}</li>
          <li>{{$shelter->mail}}</li>
          <li>{{$shelter->phone}}</li>
        </ul>
        <form action="shelters/{{$shelter->id}}" method="get">
              <button type="submit" class="w-100 btn btn-lg btn-outline-primary" href="{{route('shelters.show', $shelter->id)}}">Look closer</button>
        </form>
      </div>
    </div>
    </div>

@endforeach

  </div>
</main>
