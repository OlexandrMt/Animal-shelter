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
</html>
