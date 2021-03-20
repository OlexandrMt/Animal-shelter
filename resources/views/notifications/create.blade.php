<x-fullapp-layout>


<div class="create-form">
  <form class="form-signing" action="/notifications" method="post">
    <div class="formInput ">
      <label for="name">Ім'я<label>
      <input type="text" name="name" placeholder="Input name" id="name">
    </div>
    <div class="formInput">
      <label for="email">Email<label>
      <input type="text" name="email" placeholder="Input email" id="email">
    </div>
    <div class="formInput">
      <label for="phone">Телефон<label>
      <input type="text" name="phone" placeholder="Input phone" id="phone">
    </div>
    <div class="formInput">
      <label for="note">Повідомлення<label>
      <!-- <input type="textarea" name="notes" placeholder="Input notes" id="notes"> -->
      <textarea class="w-100" name="message" cols="10" rows="5" maxlength="300" spellcheck="true" autocomplete="off"></textarea>
    </div>
    <div class="formInput submit">
      <input type="submit" value="Надіслати">
    </div>
    <input type="hidden" name="animal_id" value='{{ $animal_id }}'>

    @csrf
  </form>
</div>

<script>
  $(document).ready(function(){
     $('form').submit(function(){
         $(this).find('input[type=submit], button[type=submit]').prop('disabled', true);
      });
    });
</script>

</x-fullapp-layout>
