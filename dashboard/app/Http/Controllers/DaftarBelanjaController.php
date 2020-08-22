<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarBelanjaController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('pembelian.daftar_belanja.index');
    }
}
