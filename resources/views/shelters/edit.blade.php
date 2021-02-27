<x-fullapp-layout>

    <x-slot name="title">
      Create
    </x-slot>

    <x-slot name="head">

    </x-slot>

    @if(isset($shelter))

    <!-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> -->

    <div class="create-form">
      <form class="form-signing" action="/shelters/ {{$shelter->id}}" method="post" enctype="multipart/form-data">

        <div class="formInput">
          <label for="name">Input name<label>
          <input type="text" name="name" value={{$shelter->name}} id="name">
        </div>

        <div class="formInput">
          <label for="address">Input address<label>
          <input type="text" name="address" value={{$shelter->address}} id="address">
        </div>
        <div class="formInput">
          <label for="mail">Input mail<label>
          <input type="text" name="mail" value={{$shelter->mail}} id="mail">
        </div>
        <div class="formInput">
          <label for="phone">Input phone<label>
          <input type="text" name="phone" value={{$shelter->phone}} id="phone">
        </div>
        <div class="img-round">
          <img src="{{ asset("storage/".$shelter->logo) }}" id="logo-preview">
        </div>
        <div class="formInput">
          <label for="img">Добавьте логотип</label>
           <input type="file" name="logo" id="logo">
        </div>
        <div class="formInput">
          <input type="submit" value="Submit">
        </div>
        @csrf
        @method('PUT')
      </form>
      <form action="/shelters/ {{$shelter->id}}" method="post">
        <div class="formInput">
          @csrf
          @method('DELETE')
          <input type="submit" value="Delete shelter">
        </div>
      </form>
      </div>

      @else
      <h2 class="text-center">Page do not exist, or you have no right to edit it</h1>
      @endif

      <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      <script>
          $('#logo').change(function () {
              var input = $(this)[0];
              if (input.files && input.files[0]) {
                  if (input.files[0].type.match('image.*')) {
                      var reader = new FileReader();
                      reader.onload = function (e) {
                          $('#logo-preview').attr('src', e.target.result);
                      }
                      reader.readAsDataURL(input.files[0]);
                  } else {
                      console.log('ошибка, не изображение');
                  }
              } else {
                  console.log('хьюстон у нас проблема');
              }
          });
      </script>

</x-fullapp-layout>
