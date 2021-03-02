<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <x-head.head>
    <x-slot name="headCommon">
      <x-head.headCommon>
        @if(@isset($title))
        <x-slot name="title">
            {{$title}}
        </x-slot>
        @endif
      </x-head.headCommon>
    </x-slot>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >

    @if(@isset($head))
      {{$head}}
    @endif
  </x-head.head>

     <body>

       <x-header.header-combined />

@if(!Auth::check())
       <x-auth.auth hidden="hidden" active="">
         <x-slot name="closeBtn">
           <x-auth.closeBtn/>
         </x-slot>
       </x-auth.auth>
@endif

  <div class="container">
    <div class="center-block">
     <x-auth-validation-errors class="mb-4" :errors="$errors" />
   </div>
 </div>
		{{$slot}}

      <x-scripts.scripts/>
      @if(@isset($scripts))
        {{$scripts}}
      @endif
	  </body>
</html>
