<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Subunit;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $dataRuangan = Subunit::ruangan()->paginate(20);
        return view('master.ruangan.index', compact('dataRuangan'));
    }
}
