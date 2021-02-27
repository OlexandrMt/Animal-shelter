<form action="shelters/create" method="get">
  <input type="submit" value="CreateShelter">
</form>

@foreach($shelters as $shelter)
  <div>
    <a href="{{route('shelters.show', $shelter->id)}}">{{$shelter->name}}<a>
  </div>
@endforeach
