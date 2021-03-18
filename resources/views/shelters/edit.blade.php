<x-fullapp-layout>

    <x-slot name="title">
      Create
    </x-slot>

    <x-slot name="head">
      <link rel="stylesheet" href="/css/style.css">
    </x-slot>


   @if(isset($shelter))

    <div class="checkout">
        <div class="container-fluid">
            <div class="row">
                    <div class="checkout-inner">
                        <div class="billing-address">
                          <form class="form-signing" action="/shelters/ {{$shelter->id}}" method="post" enctype="multipart/form-data">
                            <h2>Створіть свій притулок для тварин</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for='name'>Назва</label>
                                    <input id='name' name='name' class="form-control" type="text" value={{$shelter->name}}>
                                </div>
                                <div class="col-md-6">
                                    <label for='address'>Адреса</label>
                                    <input id='address' name='address' class="form-control" type="text" value={{$shelter->address}}>
                                </div>
                                <div class="col-md-6">
                                  <label for="mail">Електронна пошта</label>
                                  <input type="mail" name="mail" class="form-control" type="text" value={{$shelter->mail}}>
                                </div>
                                <div class="col-md-6">
                                    <label for='phone'>Телефон</label>
                                    <input id='phone' name='phone' class="form-control" type="text" value={{$shelter->phone}}>
                                </div>
                                  <div class="col-md-6">
                                    <div class="mb-3">

                                        <label for="logo" class="form-label">Логотип</label>
                                        <input class="form-control" type="file" id="logo" name="logo" accept="image/*">

                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="mb-3">
                                    <div style="margin-top:5px;" class="img-round">
                                      @if($shelter->logo==NULL) @php $shelter->logo = "images/shalter_logos/defaultimg.jpg" @endphp  @endif
                                      <img src="{{ asset("storage/".$shelter->logo) }}" id="logo-preview">
                                    </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                  <input type="submit" class="btn btn-success" value="Редагувати">
                              </div>
                          </div>
                        </div>
                        @csrf
                        @method('PUT')
                      </form>
                      <br>
                      <form action="/shelters/ {{$shelter->id}}" method="post">

                          <input type="submit" class="btn btn-success" value="Видилити">

                        @csrf
                        @method('DELETE')
                      </form>
                    </div>
            </div>


        </div>
    </div>

    @else
    <h2 class="text-center">Page do not exist, or you have no right to edit it</h2>
    @endif


<!--
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
          @if($shelter->logo==NULL) @php $shelter->logo = "images/shalter_logos/defaultimg.jpg" @endphp  @endif
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
      <h2 class="text-center">Page do not exist, or you have no right to edit it</h2>
      @endif
-->
      <x-scripts.img-preview img="logo" imgPreview="logo-preview" />


</x-fullapp-layout>
