<x-fullapp-layout>

    <x-slot name="title">
      Create
    </x-slot>

    <x-slot name="head">
      <link rel="stylesheet" href="/css/animal.css">
    </x-slot>

    <div class="main-container mb-4">
        <div class="body-container">
            <div class='signup-container'>
                <div class='left-container'>
                    <h1>
                        <i class='fas fa-paw'></i>
                        ANIMAL-SHELTER
                    </h1>
                    <div class='puppy'>
                        <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png'>
                    </div>
                </div>
    <form action="/animals/{{$animal->id}}" method="post" enctype="multipart/form-data">
    <div class='right-container'>
    <header>
      <div class='set'>
        <div class='pets-name'>
          <label for='name'>Кличка</label>
          <input id='name' value='{{$animal->name}}' type='text' name='name'>
        </div>
        <div class='pets-type'>
          <label for='type'>Тип</label>
          <input id='type' value='{{$animal->type}}' type='text' name='type'>
        </div>
      </div>
      <div class='set'>
        <div class='pets-breed'>
          <label for='breed'>Порода</label>
          <input id='breed' value='{{$animal->breed}}' type='text' name='breed'>
        </div>
        <div class='pets-birthday'>
          <label for='age'>Вік</label>
          <input id='age' value='{{$animal->age}}' type='text' name='age'>
        </div>
      </div>
      <div class='set'>
        <div class='pets-gender'>
          <label for='pet-gender-female'>Стать</label>
          <div class='radio-container'>
            <input checked='' id='pet-gender-female' name='sex' type='radio' value='0'>
            <label for='pet-gender-female'>Дівчинка</label>
            <input id='pet-gender-male' name='sex' type='radio' value='1'>
            <label for='pet-gender-male'>Хлопчик</label>
          </div>
        </div>
        <div class='pets-spayed-neutered'>
          <label for='pet-spayed'>Статус</label>
          <div class='radio-container'>
            <input checked='' id='pet-spayed' name='status' type='radio' value='0'>
            <label for='pet-spayed'>Вільний</label>
            <input id='pet-neutered' name='status' type='radio' value='1'>
            <label for='pet-neutered'>Прихищен.</label>
          </div>
        </div>
      </div>
      <br>

      <div class='pets-photo'>

        <label for="photo">Фото:</label>
        <input type="file" id="photo" name="photo">
      </div>
    </header>
    <footer>
      <div class='set'>

          <input type="submit" id='next' value="Редагувати">


      </div>
    </footer>
    </div>
    @csrf
    @method('PUT')
    </form>
    </div>
  </div>
</div>
      <x-scripts.img-preview img="logo" imgPreview="logo-preview" />

</x-fullapp-layout>

<!--
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
        <input type="text" name="name" value="{{$animal->name}}" id="name">
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
