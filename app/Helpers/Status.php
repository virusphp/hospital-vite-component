<?php

function statusAktif($nilai) {
	return $nilai == 1 ? '<span for="status" class="text-white bg-green-500 dark:bg-green-500 rounded-sm">Aktif</span>' : '<span for="status" class="bg-red-500 dark:bg-red-500">Non Aktif</span>';
}

function jenisKelamin($nilai) {
	return $nilai == 1 ? "Laki-laki" : "Perempuan";
}

function tanggalLahir($tanggal) {
	return date("d-M-Y", strtotime($tanggal));
}