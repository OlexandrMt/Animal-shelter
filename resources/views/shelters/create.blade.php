<!DOCTYPE html>
<html>
<!-- Styles -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <body>

      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form action="/shelters" method="post" enctype="multipart/form-data">
        <div>
          <label for="name">Input name<label>
          <input type="text" name="name" placeholder="Input name" id="name">
        </div>
        <div>
          <label for="address">Input address<label>
          <input type="text" name="address" placeholder="Input address" id="address">
        </div>
        <div>
          <label for="mail">Input mail<label>
          <input type="text" name="mail" placeholder="Input mail" id="mail">
        </div>
        <div>
          <label for="phone">Input phone<label>
          <input type="text" name="phone" placeholder="Input phone" id="phone">
        </div>
        <div>
          <label for="img">Добавьте логотип</label>
           <input type="file" name="logo" id="logo">
        </div>
        <div>
          <input type="submit" value="Submit">
        </div>
        @csrf
      </form>

    </body>
</html>
