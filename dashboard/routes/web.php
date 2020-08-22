<?php

use App\Outlet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/laporan', 'LaporanController@index')->name('laporan.index');
Route::group(['prefix' => 'laporan'], function () {
    Route::get('ringkasan', 'LaporanController@ringkasan')->name('laporan.ringkasan');
    Route::get('transaksi-penjualan', 'LaporanController@transaksi_penjualan')->name('laporan.transaksi.penjualan');
    Route::get('penjualan-produk', 'LaporanController@penjualan_produk')->name('laporan.penjualan.produk');
    Route::get('rekap-kas', 'LaporanController@rekap_kas')->name('laporan.rekap.kas');
    Route::get('penerimaan-pajak', 'LaporanController@penerimaan_pajak')->name('laporan.penerimaan.pajak');
    Route::get('diskon', 'LaporanController@diskon')->name('laporan.diskon');
    Route::get('laba-harian', 'LaporanController@laba_harian')->name('laporan.laba.harian');
    Route::get('stok', 'LaporanController@stok')->name('laporan.stok');
    Route::get('pelanggan', 'LaporanController@pelanggan')->name('laporan.pelanggan');
    Route::get('laba-produk', 'LaporanController@laba_produk')->name('laporan.laba.produk');
    Route::get('penjualan-harian', 'LaporanController@penjualan_harian')->name('laporan.penjualan.harian');
    Route::get('penjualan-outlet', 'LaporanController@penjualan_outlet')->name('laporan.penjualan.outlet');
    Route::get('metode-pembayaran', 'LaporanController@metode_pembayaran')->name('laporan.metode.pembayaran');
    Route::get('penjualan-kategori', 'LaporanController@penjualan_kategori')->name('laporan.penjualan.kategori');
    Route::get('penjualan-kasir', 'LaporanController@penjualan_kasir')->name('laporan.penjualan.kasir');
});

Route::resource('produk', 'ProdukController');
Route::resource('opsi-tambahan', 'OpsiTambahanController');
Route::resource('kategori', 'KategoriController');

Route::group(['prefix' => 'inventori'], function () {
    Route::get('kartu-stok', 'KartuStokController@index')->name('kartustok.index');
    Route::get('stok-masuk', 'StokMasukController@index')->name('stokmasuk.index');
    Route::get('stok-keluar', 'StokKeluarController@index')->name('stokkeluar.index');
    Route::get('transfer-stok', 'TransferStokController@index')->name('transferstok.index');
    Route::get('stok-opname', 'StokOpnameController@index')->name('stokopname.index');
});

Route::group(['prefix' => 'pembelian'], function () {
    Route::get('suplayer', 'SuplayerController@index')->name('suplayer.index');
    Route::get('po', 'POController@index')->name('po.index');
    Route::get('daftar-belanja', 'DaftarBelanjaController@index')->name('daftarbelanja.index');
});

Route::resource('outlets', 'OutletController');
Route::resource('tax-service', 'TaxServiceController');
Route::resource('karyawan', 'KaryawanController');
Route::resource('pelanggan', 'PelangganController');
Route::resource('promo', 'PromoController');
