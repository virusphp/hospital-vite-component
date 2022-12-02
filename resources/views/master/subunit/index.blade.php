<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Sub Unit') }}
		</h2>
	</x-slot>

	<div class="container py-5 pt-5 mx-auto">
		{{-- can use dinamic with database --}}
		<livewire:master.sub-unit>
		</livewire:master.sub-unit>
	</div>
</x-app-layout>