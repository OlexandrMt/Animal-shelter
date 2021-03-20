<x-fullapp-layout>

    <x-slot name="title">
      Create
    </x-slot>

    <x-slot name="head">
      <!-- <link rel="stylesheet" href="/css/style.css"> -->
    </x-slot>


    <div class="checkout">
        <div class="container-fluid">
          <form action="/animals" method="post" enctype="multipart/form-data">
            <div class="row">
                    <div class="checkout-inner">
                        <div class="billing-address">
                            <h2>Додавання домашніх тварин</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for='name'>Кличка</label>
                                    <input id='name' name='name' class="form-control" type="text" placeholder="Кличка тваринки">
                                </div>
                                <div class="col-md-6">
                                    <label for='type'>Тип</label>
                                    <select class="form-select" aria-label="type" name="type" id="type">
                                      <option selected value="3">Оберіть тип тваринки</option>
                                      <option value="кіт">Кіт</option>
                                      <option value="пес">Пес</option>
                                      <option value="інше">Інше</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                  <label for="breed">Порода</label>
                                  <input id='breed' name='breed' class="form-control" type="text" placeholder="Порода тваринки">
                                </div>
                                <div class="col-md-6">
                                    <label for='age'>Вік</label>
                                    <input id='age' name='age' class="form-control" type="text" placeholder="Вік тваринки">
                                </div>
                                <div class="col-md-6">
                                  <label>Стать</label><br>
                                  <input type="radio" class="btn-check" name="sex" id="female" autocomplete="off" value="0" checked>
                                  <label class="btn btn-outline-success" for="female">Самка</label>
                                  <input type="radio" class="btn-check" name="sex" id="male" autocomplete="off" value="1">
                                  <label class="btn btn-outline-success" for="male">Самець</label>
                                </div>
                                <div class="col-md-6">
                                  <label>Статус</label><br>
                                  <input type="radio" class="btn-check" name="status" id="free" autocomplete="off" value="0" checked>
                                  <label class="btn btn-outline-success" for="free">Вільний</label>
                                  <input type="radio" class="btn-check" name="status" id="sheltered" autocomplete="off" value="1">
                                  <label class="btn btn-outline-success" for="sheltered">Прихищений</label>
                                </div>
                                  <div class="col-md-12">
                                    <div class="mb-3">
                                    <label for="photo" class="form-label">Фото</label>
                                    <input class="form-control" type="file" id="photo" name="photo" accept="image/*">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="mb-3">
                                    <div style="margin-top:5px;" class="img-round">
                                      <img id="photo-preview" src={{ asset("storage/animal_photo/defaultimg.jpg") }} />
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <label>Історія тваринки</label>
                                  <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
                                  </div>
                                  <br>
                                </div>
                                <div class="col-md-12">
                                  <div class="mb-3">
                                    <input type="submit" class="btn btn-success" id='next' value="Добавити">
                                    <input type="hidden" name="shelter_id" value='{{$shelter_id}}'>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @csrf
          </form>
        </div>
    </div>


      <x-scripts.img-preview img="photo" imgPreview="photo-preview" />

</x-fullapp-layout>
