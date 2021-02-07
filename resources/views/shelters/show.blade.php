
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
