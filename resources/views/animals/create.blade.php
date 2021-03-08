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
    <form action="/animals" method="post" enctype="multipart/form-data">
    <div class='right-container'>
    <header>
      <div class='set'>
        <div class='pets-name'>
          <label for='name'>Кличка</label>
          <input id='name' placeholder="Кличка тваринки" type='text' name='name'>
        </div>
        <div class='pets-type'>
          <label for='type'>Тип</label>
          <input id='type' placeholder="Тип тваринки" type='text' name='type'>
        </div>
      </div>
      <div class='set'>
        <div class='pets-breed'>
          <label for='breed'>Порода</label>
          <input id='breed' placeholder="Порода тваринки" type='text' name='breed'>
        </div>
        <div class='pets-birthday'>
          <label for='age'>Вік</label>
          <input id='age' placeholder="Вік тваринки" type='text' name='age'>
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
        <!--
          <form action="/animals" method="get" >
                @csrf
                <input type="submit" id="back" value="Back">
                @method('GET')
              </form>
            -->
          <input type="submit" id='next' value="Добавити">
          <input type="hidden" name="shelter_id" value='{{$shelter_id}}'>


      </div>
    </footer>
    </div>

    @csrf
    </form>
    </div>
  </div>
</div>


      <x-scripts.img-preview img="logo" imgPreview="logo-preview" />

</x-fullapp-layout>
