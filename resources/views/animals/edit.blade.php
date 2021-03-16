<x-fullapp-layout>

    <x-slot name="title">
      Edit
    </x-slot>

    <x-slot name="head">
      <link rel="stylesheet" href="/css/style.css">
    </x-slot>


    <div class="checkout">
        <div class="container-fluid">
          <form action="/animals/{{$animal->id}}" method="post" enctype="multipart/form-data">
            <div class="row">
                    <div class="checkout-inner">
                        <div class="billing-address">
                            <h2>Додавання домашніх тварин</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for='name'>Кличка</label>
                                    <input id='name' name='name' class="form-control" type="text" value='{{$animal->name}}'>
                                </div>
                                <div class="col-md-6">
                                    <label for='type'>Тип</label>
                                    <input id='type' name='type' class="form-control" type="text" value='{{$animal->type}}'>
                                </div>
                                <div class="col-md-6">
                                    <label for='breed'>Порода</label>
                                    <input id='breed' name='breed' class="form-control" type="text" value='{{$animal->breed}}'>
                                </div>
                                <div class="col-md-6">
                                    <label for='age'>Вік</label>
                                    <input id='age' name='age' class="form-control" type="text" value='{{$animal->age}}'>
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
                                    <input class="form-control" type="file" id="photo" name="photo">
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <label>Історія тваринки</label>
                                  <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description">{{$animal->description}}</textarea>
                                  </div>
                                  <br>
                                </div>
                                <input type="submit" class="btn btn-success" id='next' value="Редагувати">
                            </div>
                        </div>
                    </div>
            </div>
            @csrf
            @method('PUT')
          </form>
        </div>
    </div>


      <x-scripts.img-preview img="logo" imgPreview="logo-preview" />

</x-fullapp-layout>
