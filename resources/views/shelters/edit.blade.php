<x-fullapp-layout>

    <x-slot name="title">
      Create
    </x-slot>

    <x-slot name="head">

    </x-slot>

    @if(isset($shelter))


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
          @isset($shelter->logo)
            <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
          @else
            <img src="{{asset('images/default_logo.jpg')}}" alt="" title="">
          @endisset
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
      <h2 class="text-center">Page do not exist, or you have no right to edit it</h2>
      @endif

      <x-scripts.img-preview img="logo" imgPreview="logo-preview" />


</x-fullapp-layout>
