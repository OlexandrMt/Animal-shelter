<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	 {{$head}}
    <body>
		{{$header}}
			@if(@isset($auth))
				<div class="shim"></div>
				{{$auth}}
			@endif

			{{$slot}}
		  
			{{$footer}}
		@if(@isset($scripts))
	 	{{$scripts}}
	  @endif
	  </body>
</html>
