<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Kamar') }}
		</h2>
	</x-slot>

	<div class="container py-5 pt-5 mx-auto">
		{{-- can use dinamic with database --}}
		<div class="overflow-x-auto relative shadow-md sm:rounded-sm">
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
				<caption
					class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
					Kamar
					<p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">
						Kamar adalah bagian terkecil dari suatu unit Rawat Inap.</p>
				</caption>
				<thead class="text-xs text-slate-800 uppercase bg-gray-50 dark:bg-slate-800 dark:text-slate-400">
					<tr>
						<th scope="col" class="py-3 px-6">
							KODE KAMAR
						</th>
						<th scope="col" class="py-3 px-6">
							NAMA KAMAR
						</th>
						<th scope="col" class="py-3 px-6">
							KETERANGAN
						</th>
						<th scope="col" class="py-3 px-6">
							KELAS
						</th>
						<th scope="col" class="py-3 px-6">
							JUMLAH TMP TIDUR
						</th>
						<th scope="col" class="py-3 px-6">
							JUMLAH TERPAKAI
						</th>
						<th scope="col" class="py-3 px-6">
							TARIF KAMAR
						</th>
						<th scope="col" class="py-3 px-6">
							KELAMIN
						</th>
						<th scope="col" class="py-3 px-6">
							<span class="sr-only">EDIT</span>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($dataKamar as $kamar)
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
						<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							{{ $kamar->kd_kamar }}
						</th>
						<td class="py-4 px-6">
							{{ $kamar->nama_sub_unit }}
						</td>
						<td class="py-4 px-6">
							{{ $kamar->keterangan }}
						</td>
						<td class="py-4 px-6">
							{{ $kamar->nama_kelas }}
						</td>
						<td class="py-4 px-6">
							{{ $kamar->jml_tmp_tidur }}
						</td>
						<td class="py-4 px-6">
							{{ $kamar->jml_terpakai }}
						</td>
						<td class="py-4 px-6">
							{{ $kamar->tarif_kamar }}
						</td>
						<td class="py-4 px-6">
							{!! statusAKtif($kamar->kelamin) !!}
						</td>
						<td class="py-4 px-6 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="p-2 m-2">
				{!! $dataKamar->links() !!}
			</div>
		</div>
	</div>
</x-app-layout>