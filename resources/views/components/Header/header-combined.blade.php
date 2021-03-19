
@php
$loginBtnText = "LogIn";
$loginClass = "login";

if(Auth::user()){
  $loginBtnText = "LogOut";
  $loginClass = "logout";
}
@endphp

<x-header.header>
  <!-- <div class="jumbotron text-center m-auto p-3 text-black">
    <div class="container">
      <h1 class="display-4">Animal-shelter <i class="fas fa-paw"></i></h1>
    </div>
  </div> -->
  <x-slot name="menuBtn">
    <x-header.menuBtn/>
  </x-slot>
  <x-slot name="logo">
    <x-header.logo/>
  </x-slot>
  <x-slot name="menuItems">
    <x-header.menuItems/>
  </x-slot>
  <x-slot name="optionsBtn">
    <x-header.optionsBtn/>
  </x-slot>
  <x-slot name="userOptions">
    <x-header.userOptions loginClass={{$loginClass}} loginBtnText={{$loginBtnText}}/>
  </x-slot>
</x-header.header>
