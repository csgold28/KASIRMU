@extends('layouts.dashboard')
@section('title')
    Tambah Opsi Tambahan
@endsection
@section('content')
    <div class="container">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
            </div>
        </div>
        <div class="page-inner mt--5">
            <div class="row row-card-no-pd mt--2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="page-header">
                                    <h4 class="page-title">Tambah Opsi Tambahan</h4>
                                    <ul class="breadcrumbs">
                                        <li class="nav-home">
                                            <a href="{{ route('home') }}">
                                                <i class="flaticon-home"></i>
                                            </a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('produk.index') }}">Produk</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('opsi-tambahan.index') }}">Opsi Tambahan</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#">Tambah Opsi Tambahan</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="name">Nama Grup Opsi Tambahan</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Nama Opsi Tambahan </label>
                                        <input type="text" name="harga" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga </label>
                                        <input type="text" name="harga" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">				
                                    <div class="form-group">
                                        <label for="kategori">Punya Bahan Baku ?</label>
                                        <br>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" value="2" name="bahan_baku" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Ya</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" value="1" name="bahan_baku" class="custom-control-input" checked>
                                            <label class="custom-control-label" for="customRadio2">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card-action">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('opsi-tambahan.index') }}" class="btn btn-danger btn-border">Batal</a>
                                        <input class="btn btn-success" type="submit" value="Simpan">
                                    </div>										
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

