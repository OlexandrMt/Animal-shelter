<!DOCTYPE html>
<html>
<head>
<title>Index</title>
</head>
<body>

<h1>Photos.index</h1>
<p>My photo</p>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="photos/create">Create</a>
    </li>
  </ul>

  <form action="photos/create" method="get"> -->
  <input type="submit" value="CreatePhoto">
  </form>
  @foreach($photos as $photo)
    <div>
      <a href="{{route('photos.show', $photo->id)}}">{{$photo->name}}<a>
    </div>
  @endforeach

</div>
</body>
</html>
