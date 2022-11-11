<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasrawatController extends Controller
{
    public function index()
    {
        $dataKelas = Kelas::paginate(20);
        return view('master.kelasrawat.index', compact('dataKelas'));
    }
}
