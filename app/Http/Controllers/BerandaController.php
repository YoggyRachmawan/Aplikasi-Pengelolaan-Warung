<?php

namespace App\Http\Controllers;

use App\Models\ViewTotalKeuangan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $data = ViewTotalKeuangan::all();
        return view('pages.beranda.index', ['data' => $data]);
    }
}
