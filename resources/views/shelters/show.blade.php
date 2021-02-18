


@if(!empty ($shelter))
<img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
  @if($shelter->user_id == $user)
  <form action="{{route('shelters.edit', $shelter->id)}}" method="get">
    <div>
      @csrf
      <input type="submit" value="Edit">
    </div>
  </form>
  @endif
<?php

    echo $shelter;
    echo "<br>";
?>
@else
<h1>Shelter do not exist</h1>
@endif
