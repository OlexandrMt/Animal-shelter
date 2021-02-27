<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
      <title>Add animal</title>
      <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <body>
      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form role="form" action="/animals" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container">
          <label for="fname">Nickname:</label>
          <input type="text" class="form-control" name="fname" id="fname" placeholder="input animal nicename">

          <label for="fbreed">Breed:</label>
          <input type="text" class="form-control" name="fbreed" id="fbreed" placeholder="input animal breed">

          <label for="fage">Age:</label>
          <input type="text" class="form-control" name="fage" id="fage" placeholder="input animal age">

          <label for="ftype">Type:</label>
          <input type="text" class="form-control" name="ftype" id="ftype" placeholder="input animal type">

          <div class="mb-3">
            <label for="fphoto" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="fphoto" name="fphoto">
          </div>

          <div class="form-check">
            <label for="gender" class="form-label">Sex:</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="1">
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="0">
              <label class="form-check-label" for="female">Female</label>
            </div>
          </div>
          <br>
          <div class="form-check">
            <label for="status" class="form-label">Status:</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="free" value="1">
              <label class="form-check-label" for="free">Free</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="status" id="taken away" value="0">
              <label class="form-check-label" for="taken away">Taken away</label>
            </div>
          </div>
          <br>
          <input type="submit" class="btn btn-success" value="Add">
        </div>
      </form>

      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    </body>
=======
<!DOCTPE html>
<html>
<head>
<title>Animals</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table-responsive">
<thead>
<form action="/animals" method="post" enctype="multipart/form-data">
  <input type="hidden" name="shelter_id" value="{{$shelter_id}}">
  <tr>
    <th>Name</th>
    <td>
      <input type="text" name="name"  id="name">
    </td>
  </tr>
  <tr>
    <th>breed</th>
    <td>
      <input type="text" name="breed"  id="breed">
    </td>
  </tr>
  <tr>
    <th>age</th>
    <td>
      <input type="text" name="age"  id="age">
    </td>
  </tr>
  <tr>
    <th>type</th>
    <td>
      <input type="text" name="type"  id="type">
    </td>
  </tr>
  <tr>
    <th>photo</th>
    <td>
        <input type="file" id="photo" name="photo">
    </td>
  </tr>
  <tr>
    <th>sex</th>
    <td>
      <input type="text" name="sex"  id="sex">
    </td>
  </tr>
  <tr>
    <th>status</th>
    <td>
      <input type="text" name="status"  id="status">
    </td>
  </tr>
</thead>
  <tr>
    <td>
    </td>
    <td>
    <input type="submit" class="btn-success" value="create">
    </td>
  </tr>
@csrf
</form>
</table>
</body>
>>>>>>> dev
</html>
