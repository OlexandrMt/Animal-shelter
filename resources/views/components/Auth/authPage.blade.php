<x-appFlex-layout>
	<x-slot name="head">
		<x-head.head>
			<x-slot name="headCommon">
				<x-head.headCommon title="Login"/>
			</x-slot>
			<link rel="stylesheet" href="/css/authPage.css">
			<style type="text/css">
				html, body {height: 100%;}
				.content {flex: 1 0 auto;}
				.flexWrapper {
					display: flex;
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

	<x-slot name="auth">
		<x-auth.auth hidden="" active="active"/>
	</x-slot>
	
	<x-slot name="footer">
		<x-footer.footer/>
	</x-slot>

	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>
</x-appFlex-layout>
