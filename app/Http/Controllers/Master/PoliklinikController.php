<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function index()
    {
        return view('master.poliklinik.index');
    }
}
