<x-app-layout>
	<x-slot name="head">
		<x-head.head>
			<x-slot name="headCommon">
				<x-head.headCommon title="Home"/>
			</x-slot>
			<link rel="stylesheet" href="./css/styles.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		</x-head.head>
	</x-slot>

	<x-slot name="header">
    <x-header.header-combined/>
  </x-slot>

	  <x-auth-validation-errors class="text-center" :errors="$errors" />
	@if(!Auth::check())
	<x-slot name="auth">
		<x-auth.auth hidden="hidden" active="">
			<x-slot name="closeBtn">
				<x-auth.closeBtn/>
			</x-slot>
		</x-auth.auth>
	</x-slot>
	@endif

	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>

	<!-- <div class="content">
		 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec auctor aliquet tincidunt. Donec vitae turpis non risus feugiat finibus et non enim. Phasellus quis mauris efficitur, faucibus nulla eget, feugiat nunc. Nulla elementum interdum aliquet. Sed porttitor in purus id vulputate. Suspendisse efficitur felis nec ex scelerisque suscipit. Fusce sit amet odio tellus. Etiam fringilla nulla magna, venenatis elementum turpis dictum ut. Phasellus massa felis, sollicitudin sit amet mollis nec, convallis ut est. Vivamus finibus massa magna, vitae fringilla odio accumsan non. Sed arcu magna, semper eu quam id, efficitur mollis ipsum.

		Sed arcu arcu, vehicula sit amet volutpat at, malesuada id ex. Nullam vitae lorem orci. Etiam ligula nunc, fermentum vel sem vitae, commodo rutrum arcu. Fusce lacinia lacinia ultrices. Etiam nulla purus, euismod vitae accumsan ac, ultricies nec velit. Mauris volutpat porttitor eleifend. Nulla ut porttitor mauris.

		Aliquam vestibulum fringilla mi. Phasellus cursus malesuada urna, ac volutpat eros aliquet et. Ut interdum ipsum in risus accumsan, sed pretium tortor tristique. In vulputate, lacus ut laoreet aliquet, enim nulla maximus massa, nec rutrum magna sapien at erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Donec posuere sapien ac justo pharetra dictum. Aliquam blandit nunc non justo tincidunt eleifend.

		Donec vel tellus mauris. Vestibulum egestas velit sed odio ultrices cursus. Aliquam eu tempor tellus, eu ultricies velit. Sed sit amet justo id ipsum scelerisque auctor. Duis eget molestie odio. Integer sed consectetur ex. Etiam vitae eleifend tellus. Integer fringilla odio ut tempus viverra. Praesent dapibus nisi quis nunc sollicitudin lobortis. Nam at scelerisque metus, non lacinia nisi. Phasellus in dui nisi.

		Sed porttitor arcu id lacus vehicula, quis ultricies urna laoreet. Nam commodo, elit vitae tempor pulvinar, risus mi gravida ex, et convallis enim metus ut erat. Praesent vitae rhoncus nulla. Integer pellentesque tempor suscipit. Vestibulum augue metus, vulputate et neque at, ultricies iaculis nisi. Nunc ac interdum nibh. Morbi porttitor consequat mattis. Nam sed est in lorem vehicula lobortis a ut sapien. Sed ac neque aliquet, feugiat sem et, interdum ligula.

		Nunc consectetur blandit urna, a semper enim cursus vel. Maecenas finibus pulvinar eros in congue. Vestibulum aliquam dui eget risus eleifend scelerisque. Maecenas rutrum vulputate est eget bibendum. Ut et tincidunt ipsum, sit amet mattis leo. Aliquam ultrices lacus id ex hendrerit auctor. Nunc ullamcorper, nunc non hendrerit pellentesque, velit metus placerat ligula, sed semper dui ex sit amet elit. Pellentesque id elementum sapien, id maximus nisi. Phasellus consequat nulla eu felis mollis bibendum. Nullam blandit massa purus, vitae finibus ipsum dapibus eget. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut fermentum lectus ac lectus gravida, vitae faucibus nibh rhoncus. Pellentesque venenatis ex a tellus pulvinar, ut lobortis lacus tincidunt. Donec malesuada rutrum tellus ut pulvinar. Etiam iaculis lorem quis leo consequat viverra.
	</div> -->
	<div class="container">
	  <div class="row">
	    @foreach ($animals as $animal)
	    <div class="col-sm-4" >
	      	      <img src="{{asset("storage/" .$animal->photo) }}" class="card-img-top" alt="...">
	      <div class="card-body" >

	        <h4 class="card-title"> Імя:{{ $animal->name }}</h4>
	        <p class="card-text"> Вік:{{ $animal->age }}</p>
	        <a href="{{action('AnimalController@show',['animal'=>$animal])}}" class="btn btn-dark">Детальна інформація</a>
	      </div>
	    </div>
	    @endforeach
	  </div>
	</div>

	<div class="jumbotron text-center" style="margin-bottom:0">
	  <p>Притулок для тварин</p>
	  <p>Ми знаходимось за адресою:</p>
		<p>м.Вінниця, провулок Цегельний, 12</p>
	  <p>Наш телефон: +38-067-431-74-24</p>
	</div>

</x-app-layout>
