<?php

namespace App\Http\Controllers\cabinet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CabinetController extends Controller
{
    public function index()
    {
        return view('pages/cabinet/index');
    }
}
