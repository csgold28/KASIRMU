<?php

namespace App\Http\Controllers;

use App\Outlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('laporan.index');
    }

    public function ringkasan()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.ringkasan', compact('outlets'));
    }

    public function transaksi_penjualan()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.transaksi_penjualan', compact('outlets'));
    }

    public function penjualan_produk()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.penjualan_produk', compact('outlets'));
    }

    public function rekap_kas()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.rekap_kas', compact('outlets'));
    }

    public function penerimaan_pajak()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.penerimaan_pajak', compact('outlets'));
    }

    public function diskon()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.diskon', compact('outlets'));
    }

    public function laba_harian()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.laba_harian', compact('outlets'));
    }

    public function stok()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.stok', compact('outlets'));
    }

    public function pelanggan()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.pelanggan', compact('outlets'));
    }

    public function laba_produk()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.laba_produk', compact('outlets'));
    }

    public function penjualan_harian()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.penjualan_harian', compact('outlets'));
    }

    public function penjualan_outlet()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.penjualan_outlet', compact('outlets'));
    }

    public function metode_pembayaran()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.metode_pembayaran', compact('outlets'));
    }

    public function penjualan_kategori()
    {
        $user = Auth::user();
        $outlets = Outlet::where('user_id', $user->id)->latest()->get();
        return view('laporan.penjualan_kategori', compact('outlets'));
    }

    public function penjualan_kasir()
    {
        return view('laporan.penjualan_kasir');
    }
}
