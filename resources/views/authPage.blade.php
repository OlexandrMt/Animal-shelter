<x-app-layout>
	<x-slot name="head">
		<x-head.head>
			<x-slot name="headCommon">
				<x-head.headCommon title="Register"/>
			</x-slot>
			<link rel="stylesheet" href="/css/authPagestyles.css">
		</x-head.head>
	</x-slot>

	<x-slot name="header">
		<x-header.header/>
	</x-slot>

	<x-slot name="auth">
		<x-auth.auth hidden="" active="active"/>
	</x-slot>

	<x-slot name="scripts">
		<x-scripts.scripts/>
	</x-slot>
</x-app-layout>
