<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KartuStokController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('inventori.kartu_stok.index');
    }
}
