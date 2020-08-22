<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferStokController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('inventori.transfer_stok.index');
    }
}
