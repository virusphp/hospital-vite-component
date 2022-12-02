<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Pegawai') }}
		</h2>
	</x-slot>

	<div class="container py-5 pt-5 mx-auto">
		{{-- can use dinamic with database --}}
		<div class="bg-white overflow-x-auto relative shadow-md sm:rounded-sm">
			<div class="flex p-3 justify-between">
				<div>
					<caption
						class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
						Pegawai
						Pegawai adalah daftar pegawai RSUD Kraton
					</caption>
				</div>
				<div>
					<div class="relative">
						<div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
							<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
								xmlns="http://www.w3.org/2000/svg">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
									d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
							</svg>
						</div>
						<input type="text" id="pencarian"
							class="bg-gray-50 input-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
							placeholder="Nama Pegawai...">
					</div>
				</div>
			</div>
			<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

				<thead class="text-xs text-slate-800 uppercase bg-gray-50 dark:bg-slate-800 dark:text-slate-400">
					<tr>
						<th scope="col" class="py-3 px-6">
							KODE PEGAWAI
						</th>
						<th scope="col" class="py-3 px-6">
							NAMA PEGAWAI
						</th>
						<th scope="col" class="py-3 px-6">
							JNS KEL
						</th>
						<th scope="col" class="py-3 px-6">
							TEMPAT/TGL LAHIR
						</th>
						<th scope="col" class="py-3 px-6">
							ALAMAT
						</th>
						<th scope="col" class="py-3 px-6">
							UNIT KERJA
						</th>
						<th scope="col" class="py-3 px-6">
							NO TELP
						</th>
						<th scope="col" class="py-3 px-6">
							NO KTP
						</th>
						<th scope="col" class="py-3 px-6">
							<span class="sr-only">EDIT</span>
						</th>
					</tr>
				</thead>
				<tbody>
					@foreach($dataPegawai as $pegawai)
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
						<th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							{{ $pegawai->kd_pegawai }}
						</th>
						<td class="py-4 px-6">
							{{ $pegawai->gelar_depan == "-" ? "" : $pegawai->gelar_depan }} {{ $pegawai->nama_pegawai }}
							{{ $pegawai->gelar_belakang == "-" ? "" : $pegawai->gelar_belakang }}
						</td>
						<td class="py-4 px-6">
							{{ jenisKelamin($pegawai->jns_kel) }}
						</td>
						<td class="py-4 px-6">
							{{ $pegawai->tempat_lahir }}, {{ tanggalLahir($pegawai->tgl_lahir) }}
						</td>
						<td class="py-4 px-6">
							{{ $pegawai->alamat }},{{ $pegawai->rt == "-" ? "" : $pegawai->rt }}
							{{ $pegawai->rw == "-" ? "" : $pegawai->rw }}{{ $pegawai->nama_kelurahan }}
						</td>
						<td class="py-4 px-6">
							{{ $pegawai->unit_kerja }}
						</td>
						<td class="py-4 px-6">
							{{ $pegawai->no_telp }}
						</td>
						<td class="py-4 px-6">
							{{ $pegawai->no_tkp }}
						</td>
						<td class="py-4 px-6">
							{!! statusAKtif($pegawai->status_pegawai) !!}
						</td>
						<td class="py-4 px-6 text-right">
							<a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="p-2 m-2">
				{!! $dataPegawai->links() !!}
			</div>
		</div>
	</div>
</x-app-layout>