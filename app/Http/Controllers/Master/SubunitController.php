<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Subunit;
use Illuminate\Http\Request;

class SubunitController extends Controller
{
    public function index()
    {
        $dataSubunit = Subunit::paginate(20);
        return view('master.subunit.index', compact('dataSubunit'));
    }
}
