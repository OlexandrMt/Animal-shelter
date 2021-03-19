@php
 $disabled = "class=disabled";
 $readonly = "readonly";
@endphp

@if(Auth::check())
	@php
	 $readonly = "";
	 $disabled = "";
	@endphp
@endif

<div class="contactContainer">
	<form method="POST" name="contact" action="/contact/animal">
		{{ csrf_field() }}
		<input type="hidden" name="shelterId" value="{{$shelterId}}">
		<input type="hidden" name="animalId" value="{{$animalId}}">

		<div class="formInput">
			<label for="message" class="textBold">Написати повідомлення</label>
			<textarea {{$readonly}} {{$disabled}} name="message" cols="10" rows="5" maxlength="300" spellcheck="true" autocomplete="off"></textarea>
		</div>
		<div class="formInput submit">
			<input disabled type="submit" value="Надіслати">
		</div>
	</form>
</div>
