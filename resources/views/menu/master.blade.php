<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Master') }}
		</h2>
	</x-slot>

	<div class="container grid lg:grid-cols-6 lg:gap-3 mx-auto px-8">
		{{-- can use dinamic with database --}}
		<x-card-menu link="{{ route('subunit') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/logo.png') }}" />
			</x-slot>
			{{ __('SUB UNIT') }}
		</x-card-menu>

		<x-card-menu link="{{ route('poliklinik') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/pasien.png') }}" />
			</x-slot>
			{{ __('POLIKLINIK') }}
		</x-card-menu>

		<x-card-menu link="{{ route('kelasrawat') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/logo.png') }}" />
			</x-slot>
			{{ __('KELAS RAWAT') }}
		</x-card-menu>

		<x-card-menu link="{{ route('ruangan') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/logo.png') }}" />
			</x-slot>
			{{ __('RUANGAN') }}
		</x-card-menu>

		<x-card-menu link="{{ route('kamar') }}">
			<x-slot name="logo">
				<x-logo-menu icon="{{ asset('images/icon-menu/logo.png') }}" />
			</x-slot>
			{{ __('KAMAR') }}
		</x-card-menu>
	</div>
</x-app-layout>