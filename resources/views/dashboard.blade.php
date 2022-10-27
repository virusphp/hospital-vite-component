<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container grid lg:grid-cols-6 lg:gap-3 mx-auto px-8">
        {{-- can use dinamic with database --}}
        <x-card-menu>
            <x-slot name="logo">
                <x-logo-menu icon="{{ asset('images/icon-menu/logo.png') }}" />
            </x-slot>
            {{ __('SUB UNIT') }}
        </x-card-menu>
        <x-card-menu>
            <x-slot name="logo">
                <x-logo-menu icon="{{ asset('images/icon-menu/pasien.png') }}" />
            </x-slot>
            {{ __('PASIEN') }}
        </x-card-menu>
    </div>
</x-app-layout>