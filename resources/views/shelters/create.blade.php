<x-fullapp-layout>

    <x-slot name="title">
      Create
    </x-slot>

    <x-slot name="head">
      <!-- <link rel="stylesheet" href="/css/style.css"> -->
    </x-slot>


    <div class="checkout">
        <div class="container-fluid">
          <form class="form-signing" action="/shelters" method="post" enctype="multipart/form-data">
            <div class="row">
                    <div class="checkout-inner">
                        <div class="billing-address">
                            <h2>Створіть свій притулок для тварин</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for='name'>Назва</label>
                                    <input id='name' name='name' class="form-control" type="text" placeholder="Назва притулку">
                                </div>
                                <div class="col-md-6">
                                    <label for='address'>Адреса</label>
                                    <input id='address' name='address' class="form-control" type="text" placeholder="Адреса притулку">
                                </div>
                                <div class="col-md-6">
                                  <label for="mail">Електронна пошта</label>
                                  <input type="mail" name="mail" class="form-control" type="text" placeholder="Адреса електронної пошти">
                                </div>
                                <div class="col-md-6">
                                    <label for='phone'>Телефон</label>
                                    <input id='phone' name='phone' class="form-control" type="text" placeholder="Номер телефону">
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
                                      <img id="logo-preview" src={{ asset("storage/images/shalter_logos/defaultimg.jpg") }} />
                                    </div>
                                </div>
                              </div>

                                <input type="submit" class="btn btn-success" value="Створити">
                            </div>
                        </div>
                    </div>
            </div>
            @csrf
          </form>
        </div>
    </div>


<!--
    <div class="create-form">
      <form class="form-signing" action="/shelters" method="post" enctype="multipart/form-data">
        <div class="formInput ">
          <label for="name">Name<label>
          <input type="text" name="name" placeholder="Input name" id="name">
        </div>
        <div class="formInput">
          <label for="address">Address<label>
          <input type="text" name="address" placeholder="Input address" id="address">
        </div>
        <div class="formInput">
          <label for="mail">Mail<label>
          <input type="text" name="mail" placeholder="Input mail" id="mail">
        </div>
        <div class="formInput">
          <label for="phone">Phone<label>
          <input type="text" name="phone" placeholder="Input phone" id="phone" >
        </div>

        <div class="formInput">
           <label for="img">Logo</label>
           <input type="file" name="logo" id="logo" accept="image/*">
        </div>

        <div class="img-round">
            <img id="logo-preview" src={{ asset("storage/images/shalter_logos/defaultimg.jpg") }} />
        </div>

        <div class="formInput submit">
    			<input type="submit" value="Create">
    		</div>

        @csrf
      </form>
    </div>
-->
      <x-scripts.img-preview img="logo" imgPreview="logo-preview" />


</x-fullapp-layout>
