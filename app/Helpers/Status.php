<?php

function statusAktif($nilai) {
	return $nilai == 1 ? '<span for="status" class="text-white bg-green-500 dark:bg-green-500 rounded-sm">Aktif</span>' : '<span for="status" class="bg-red-500 dark:bg-red-500">Non Aktif</span>';
}