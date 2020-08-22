@extends('layouts.dashboard')
@section('title')
    Tambah Kategori
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
                                    <h4 class="page-title">Tambah Kategori</h4>
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
                                            <a href="{{ route('kategori.index') }}">
                                            Kategori</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#">Tambah Kategori</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                        <div class="card">
                            <form action="{{ route('kategori.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Outlet</label>
                                            <div class="select2-input">
                                                <select class="form-control form-control" name="outlet" id="outlet">
                                                    <option value="all" selected>Semua Outlet</option>
                                                    @foreach ($outlet as $item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('outlet'))
                                                    <span class="text-danger">{{$errors->first('outlet')}}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Nama Kategori</label>
                                            <input type="text" name="name" class="form-control">
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{$errors->first('name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card-action">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="{{ route('kategori.index') }}" class="btn btn-danger btn-border">Batal</a>
                                            <input class="btn btn-success" type="submit" value="Simpan">
                                        </div>										
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $('#outlet').select2({
			theme: "bootstrap"
		});
    </script>
@endsection

