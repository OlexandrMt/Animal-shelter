<x-fullapp-layout>


<div class="create-form">
  <form class="form-signing" action="/notifications" method="post">
    <div class="formInput ">
      <label for="name">Name<label>
      <input type="text" name="name" placeholder="Input name" id="name">
    </div>
    <div class="formInput">
      <label for="email">Mail<label>
      <input type="text" name="email" placeholder="Input email" id="email">
    </div>
    <div class="formInput">
      <label for="phone">Phone<label>
      <input type="text" name="phone" placeholder="Input phone" id="phone">
    </div>
    <div class="formInput">
      <label for="note">Notes<label>
      <input type="textarea" name="notes" placeholder="Input notes" id="notes">
    </div>
    <div class="formInput submit">
      <input type="submit" value="Create">
    </div>
    <input type="hidden" name="animal_id" value='{{$_GET["animal_id"]}}'>

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
