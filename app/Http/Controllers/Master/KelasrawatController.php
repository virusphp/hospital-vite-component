<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KelasrawatController extends Controller
{
    public function index()
    {
        return view('master.kelasrawat.index');
    }
}
