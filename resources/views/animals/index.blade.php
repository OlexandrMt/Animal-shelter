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
<table class="table table-striped">
<thead>
<tr>
<th>Id</th>
<th>Nick</th>
<th>breed</th>
<th>age</th>
<th>type</th>
<th>photo</th>
<th>sex</th>
<th>status</th>
<th>options</th>
</tr>
</thead>
@foreach ($animal as $animal)

<tr>
<td>{{ $animal->id }}</td>
<td>{{ $animal->name }}</td>
<td>{{ $animal->breed }}</td>
<td>{{ $animal->age }}</td>
<td>{{ $animal->type }}</td>
<td><img src="{{asset("storage/" .$animal->photo) }}"></td>
<td>{{ $animal->sex }}</td>
<td>{{ $animal->status }}</td>
<td>
  <div class="input-group">
  <form action="/animals/{{ $animal->id }}/edit" method="get">
        @csrf
        <input type="submit" class="btn-success" value="edit animal">
        @method('GET')
      </form>

      <form action="/animals/{{ $animal->id }}" method="post">
        @csrf
        <input type="submit" class="btn-success" value="remove animal">
        @method('DELETE')
      </form>

 </div>
  </td>
</tr>
@endforeach

</table>
</body>
</html>
