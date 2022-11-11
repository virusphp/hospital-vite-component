<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Subunit;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index()
    {
        $dataKlinik = Subunit::poliklinik()->paginate(20);
        return view('master.poliklinik.index', compact('dataKlinik'));
    }
}
