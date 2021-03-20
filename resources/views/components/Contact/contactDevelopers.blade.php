<x-appflex-layout>
	<x-slot name="head">
		<x-head.head>
			<x-slot name="headCommon">
				<x-head.headCommon title="Contact Us"/>
			</x-slot>
			<link rel="stylesheet" href="/css/styles.css">
			<style type="text/css">
				html, body {height: 100%;}
				.content {flex: 1 0 auto;}
				.flexWrapper {	display: flex;
					flex-direction: column;
					min-height: 100%;
				}
				footer {
					flex: 0 0 auto;
					padding: 0 !important;
				};
			</style>
		</x-head.head>
	</x-slot>

	<x-slot name="topBar">
		<x-header.topBar/>
	</x-slot>

	<x-slot name="header">
		<x-header.header>
			<x-slot name="logo">
				<x-header.logo class="centered"/>
			</x-slot>
		</x-header.header>
	</x-slot>

	<div class="contactContainer contactDevelopers">
		<form method="POST" name="contact" action="/contact/developers">
			{{ csrf_field() }}
			<div class="formInput centerText textBold">
				Якщо у вас виникли будь-які запитання стосовно роботи сайту, ви можете залишити їх тут
			</div>
			<div class="formInput">
				<label for="username">Ім'я*</label>
				<input type="text" name="username" autocomplete="off">
			</div>
			<div class="formInput">
				<label for="email">Email*</label>
				<input type="email" name="email" autocomplete="off">
			</div>
			<div class="formInput">
				<label for="email">Повідомлення</label>
				<textarea name="message" cols="10" rows="10" maxlength="300" spellcheck="true" autocomplete="off"></textarea>
			</div>
			<div class="formInput submit">
				<input disabled type="submit" value="Надіслати">
			</div>
		</form>
	</div>

	<x-slot name="footer">
		<x-footer.footer />
	</x-slot>

	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>
</x-appflex-layout>
