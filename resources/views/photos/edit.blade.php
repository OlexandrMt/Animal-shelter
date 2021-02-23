<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>

<h1>Photos.edit</h1>
<p>My photo</p>

<form action="/photos/ {{$photo->id}}" method="post" enctype="multipart/form-data">

  <div>

    <label for="name">Input name<label>
    <input type="text" name="name" value={{$photo->name}} id="name">
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
  @csrf
  @method('PUT')
</form>



</form>
<form action="/photos/ {{$photo->id}}" method="post">
  <div>
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete photo">
  </div>
</form>
</body>
</html>
