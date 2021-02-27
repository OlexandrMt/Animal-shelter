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
  <form action="/animals/{{$animal->id}}" method="post" enctype="multipart/form-data">
    <tr>
      <th>Name</th>
      <td>
        <input type="text" name="name" value={{$animal->name}} id="name">
      </td>
    </tr>
    <tr>
      <th>breed</th>
      <td>
        <input type="text" name="breed" value={{$animal->breed}} id="breed">
      </td>
    </tr>
    <tr>
      <th>age</th>
      <td>
        <input type="text" name="age" value={{$animal->age}} id="age">
      </td>
    </tr>
    <tr>
      <th>type</th>
      <td>
        <input type="text" name="type" value={{$animal->type}} id="type">
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
        <input type="text" name="sex" value={{$animal->sex}} id="sex">
      </td>
    </tr>
    <tr>
      <th>status</th>
      <td>
        <input type="text" name="status" value={{$animal->status}} id="status">
      </td>
    </tr>
  </thead>
    <tr>
      <td>
      </td>
      <td>
      <input type="submit" class="btn-success" value="save">
      </td>
    </tr>
@csrf
@method('PUT')
</form>

</table>
</body>
</html>
