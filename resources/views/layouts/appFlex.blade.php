<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	 {{$head}}
    <body>
	 <div class="flexWrapper">
		@if(@isset($topBar))
			{{$topBar}}
		@endif
		<div class="content">
			{{$header}}
		
			@if(@isset($auth))
				<div class="shim"></div>
				{{$auth}}
			@endif

			{{$slot}}
		</div>
		{{$footer}}
	 </div>
	 @if(@isset($scripts))
	 	{{$scripts}}
	 @endif
	  </body>
</html>
