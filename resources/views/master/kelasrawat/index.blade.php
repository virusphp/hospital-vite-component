<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Kelas Rawat') }}
		</h2>
	</x-slot>

	<div class="container py-5 pt-5 mx-auto">
		{{-- can use dinamic with database --}}
		<div class="overflow-x-auto relative shadow-md sm:rounded-sm">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<caption
					class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
					Kelas Rawat
					<p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
						Kelas Rawat adalah bagian terkecil dari suatu unit.</p>
				</caption>
				<thead class="text-xs text-slate-800 uppercase bg-gray-50 dark:bg-slate-800 dark:text-slate-400">
					<tr>
						<th scope="col" class="py-3 px-6">
							KODE KELAS
						</th>
						<th scope="col" class="py-3 px-6">
							NAMA KELAS
						</th>
						<th scope="col" class="py-3 px-6">
							KETERANGAN
						</th>
						<th scope="col" class="py-3 px-6">
							KODE SIRANAP
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
					@foreach($dataKelas as $kelas)
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
						<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							{{ $kelas->kd_kelas }}
						</th>
						<td class="py-4 px-6">
							{{ $kelas->nama_kelas }}
						</td>
						<td class="py-4 px-6">
							{{ $kelas->keterangan }}
						</td>
						<td class="py-4 px-6">
							{{ $kelas->kode_siranap }}
						</td>
						<td class="py-4 px-6">
							{!! statusAKtif($kelas->status) !!}
						</td>
						<td class="py-4 px-6 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="p-2 m-2">
				{!! $dataKelas->links() !!}
			</div>
		</div>
	</div>
</x-app-layout>