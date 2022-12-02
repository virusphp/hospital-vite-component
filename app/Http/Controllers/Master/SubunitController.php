<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Subunit;
use Illuminate\Http\Request;

class SubunitController extends Controller
{
    public function index()
    {
        return view('master.subunit.index');
    }
}
