<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Poliklinik') }}
		</h2>
	</x-slot>

	<div class="container py-5 pt-5 mx-auto">
		{{-- can use dinamic with database --}}
		<div class="overflow-x-auto relative shadow-md sm:rounded-sm">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<caption
					class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
					Poliklinik
				</caption>
				<thead class="text-xs text-slate-800 uppercase bg-gray-50 dark:bg-slate-800 dark:text-slate-400">
					<tr>
						<th scope="col" class="py-3 px-6">
							KODE POLIKLINIK
						</th>
						<th scope="col" class="py-3 px-6">
							NAMA POLIKLINIK
						</th>
						<th scope="col" class="py-3 px-6">
							KETERANGAN
						</th>
						<th scope="col" class="py-3 px-6">
							AKTIF
						</th>
						<th scope="col" class="py-3 px-6">
							<span class="sr-only">EDIT</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
						<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							Apple MacBook Pro 17"
						</th>
						<td class="py-4 px-6">
							Sliver
						</td>
						<td class="py-4 px-6">
							Laptop
						</td>
						<td class="py-4 px-6">
							$2999
						</td>
						<td class="py-4 px-6 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
						<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							Microsoft Surface Pro
						</th>
						<td class="py-4 px-6">
							White
						</td>
						<td class="py-4 px-6">
							Laptop PC
						</td>
						<td class="py-4 px-6">
							$1999
						</td>
						<td class="py-4 px-6 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
					<tr class="bg-white dark:bg-gray-800">
						<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							Magic Mouse 2
						</th>
						<td class="py-4 px-6">
							Black
						</td>
						<td class="py-4 px-6">
							Accessories
						</td>
						<td class="py-4 px-6">
							$99
						</td>
						<td class="py-4 px-6 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</x-app-layout>