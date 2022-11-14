<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class KamarController extends Controller
{
    public function index()
    {
        $dataKamar = DB::table('kamar as kmr')
                    ->select('kmr.kd_kamar','kmr.jml_tmp_tidur','kmr.jml_terpakai','kmr.tarif_kamar','kmr.keterangan','sub.nama_sub_unit',
                            'kls.nama_kelas','kmr.tarif_kamar','kmr.kelamin')
                    ->join('sub_unit as sub','kmr.kd_sub_unit','sub.kd_sub_unit')
                    ->join('kelas as kls','kmr.kd_kelas','kls.kd_kelas')
                    ->paginate(20);
        // dd($dataKamar);
        return view('master.kamar.index', compact('dataKamar'));
    }
}
