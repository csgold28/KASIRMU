<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokKeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('inventori.stok_keluar.index');
    }
}
