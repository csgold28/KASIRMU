<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuplayerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('pembelian.suplayer.index');
    }
}
