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
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/authPageStyles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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

    <div class="col-md mb-4 d-flex justify-content-center" >
     <x-validation-errors  :errors="$errors" />
   </div>

		<div class="container">
      {{$slot}}
    </div>

    <x-footer.footer>
    </x-footer.footer>

      <x-scripts.scripts/>
      @if(@isset($scripts))
        {{$scripts}}
      @endif


  	  </body>
</html>
