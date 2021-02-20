<!DOCTYPE html>
<html>
<head>
<title>Create</title>
</head>
<body>

<h1>Photos.create</h1>
<p>My project</p>

@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>

@endif
      <form action="/photos" method="post" enctype="multipart/form-data">
        <div>
          <label for="name">Input name<label>
          <input type="text" name="name" placeholder="Input name" id="name">
        </div>

        <div>
          <input type="submit" value="Submit">
        </div>
        @csrf
      </form>

</body>
</html>
