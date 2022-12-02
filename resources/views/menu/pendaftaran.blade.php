<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Registrasi') }}
		</h2>
	</x-slot>

	<div class="container grid lg:grid-cols-6 lg:gap-3 mx-auto px-8">
		{{-- can use dinamic with database --}}
		<x-card-menu link="{{ route('ruangan') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/jalan.png') }}" />
			</x-slot>
			{{ __('RAWAT JALAN') }}
		</x-card-menu>
		<x-card-menu link="{{ route('ruangan') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/igd.png') }}" />
			</x-slot>
			{{ __('RAWAT DARURAT') }}
		</x-card-menu>
		<x-card-menu link="{{ route('ruangan') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/inap.png') }}" />
			</x-slot>
			{{ __('RAWAT INAP') }}
		</x-card-menu>
	</div>
</x-app-layout>