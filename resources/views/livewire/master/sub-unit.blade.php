<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Sub Unit') }}
    </h2>
</x-slot>

<div class="container py-5 pt-5 mx-auto">
    <div class="bg-white overflow-x-auto relative shadow-md sm:rounded-sm">
        <div class="flex p-3 justify-between">
            <div>
                <caption
                    class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
                    Sub Unit
                </caption>
            </div>
            <div class="flex items-end mb-3">
                <div class="relative mr-3">
                    <div class="flex absolute inset-y-0 right-0 items-center pr-1 pointer-events-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>

                    <input type="text" wire:model="search"
                        class="bg-gray-50 input-sm border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full pl-5 p-2  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Subunit...">
                </div>

                <button
                    class="bg-amber-400 rounded-md border-slate-100 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 p-1 float-right"
                    data-modal-toggle="subunit-modal" wire:click.prevent="$emit('showModal', null)">Tambah</button>
            </div>
        </div>
        <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-slate-800 uppercase bg-gray-50 dark:bg-slate-800 dark:text-slate-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        KODE SUBUNIT
                    </th>
                    <th scope="col" class="py-3 px-6">
                        NAMA SUBUNIT
                    </th>
                    <th scope="col" class="py-3 px-6">
                        KETERANGAN
                    </th>
                    <th scope="col" class="py-3 px-6">
                        STATUS
                    </th>
                    <th scope="col" class="py-3 px-6">
                        <span class="sr-only">EDIT</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataSubunit as $unit)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $unit->kd_sub_unit }}
                    </th>
                    <td class="py-4 px-6">
                        {{ $unit->nama_sub_unit }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $unit->keterangan }}
                    </td>
                    <td class="py-4 px-6">
                        {!! statusAKtif($unit->enabled) !!}
                    </td>
                    <td class="py-4 px-6 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-2 m-2">
            {!! $dataSubunit->appends(['search' => 'search'])->render() !!}
        </div>
    </div>
    <div class="container mx-auto bg-white">COBALAH</div>
    <livewire:master.modal.subunit-modal />
</div>