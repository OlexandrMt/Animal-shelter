@if( !empty($shelter) )
<form action="/shelters/ {{$shelter->id}}" method="post" enctype="multipart/form-data">

  <div>
    <label for="name">Input name<label>
    <input type="text" name="name" value={{$shelter->name}} id="name">
  </div>

  <div>
    <label for="address">Input address<label>
    <input type="text" name="address" value={{$shelter->address}} id="address">
  </div>
  <div>
    <label for="mail">Input mail<label>
    <input type="text" name="mail" value={{$shelter->mail}} id="mail">
  </div>
  <div>
    <label for="phone">Input phone<label>
    <input type="text" name="phone" value={{$shelter->phone}} id="phone">
  </div>
  <div>
    <img src="{{ asset("storage/".$shelter->logo) }}" alt="" title="">
  </div>
  <div>
    <label for="img">Добавьте логотип</label>
     <input type="file" name="logo" id="logo">
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
  @csrf
  @method('PUT')
</form>
<form action="/shelters/ {{$shelter->id}}" method="post">
  <div>
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete shelter">
  </div>
</form>
@else
<h1>Page do not exist, or you have no right to edit it</h1>
@endif
