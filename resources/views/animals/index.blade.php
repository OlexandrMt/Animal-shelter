<x-fullapp-layout>

    <x-slot name="title">
      Animal list
    </x-slot>

    <x-slot name="head">
      <link rel="stylesheet" href="/css/animal.css">
    </x-slot>

    <div style="border: 2px solid black">
    <table class="table table-striped">
      <div style="float:right">
        <div class="input-group">
          <form action="/animals/create" method="get" >
                @csrf
                <input type="submit" class="btn-success" value=" Добавити ">
                @method('GET')
              </form>
        </div>
      </div>
      <br>
    <thead>
    <tr>
    <th>Id</th>
    <th>Кличка</th>
    <th>Порода</th>
    <th>Вік</th>
    <th>Тип</th>
    <th>Фото</th>
    <th>Стать</th>
    <th>Статус</th>
    <th>Керування</th>
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

    <td>
    @if(is_null($animal->sex))
    Не вказано
    @elseif($animal->sex==1)
    Самець
    @else
    Самка
    @endif
    </td>

    <td>
      @if(is_null($animal->status))
      Не вказано
      @elseif($animal->status==1)
      Прихищений
      @else
      Вільний
      @endif
    </td>
    <td>
      <div class="input-group">
      <form action="/animals/{{ $animal->id }}/edit" method="get">
            @csrf
            <input type="submit" class="btn-success" value=" Редагувати ">
            @method('GET')
          </form>
      </div>
      <br>
      <div class="input-group">
          <form action="/animals/{{ $animal->id }}" method="post">
            @csrf
            <input type="submit" class="btn-success" value=" Видалити ">
            @method('DELETE')
          </form>

     </div>
      </td>
    </tr>
    @endforeach

    </table>
  </div>


      <x-scripts.img-preview img="logo" imgPreview="logo-preview" />

</x-fullapp-layout>
