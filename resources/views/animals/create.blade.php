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

  <input type="hidden" name="shelter_id" value='{{$shelter_id}}'>

@csrf
</form>
</table>
</body>
</html>
