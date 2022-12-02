<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $dataPegawai = Pegawai::select(
                'kd_pegawai','nama_pegawai','gelar_depan','gelar_belakang',
                'tempat_lahir','tgl_lahir','jns_kel','alamat','rt','rw', 'nama_kelurahan',
                'unit_kerja','no_telp','no_ktp', 'status_pegawai')
            ->join('kelurahan','pegawai.kd_kelurahan','kelurahan.kd_kelurahan')
            ->aktif()
            ->paginate(20);
        return view('master.pegawai.index', compact('dataPegawai'));
    }
}
