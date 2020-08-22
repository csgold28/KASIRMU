@extends('layouts.dashboard')
@section('title')
    Tambah Produk 
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
                                    <h4 class="page-title">Tambah Produk </h4>
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
                                            <a href="#">Tambah Produk</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="kategori">Outlet</label>
                                        <div class="select2-input">
                                            <select class="form-control form-control" id="outlet">
                                                <option value="all" selected >Semua Outlet </option>
                                                @foreach ($outlets as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name_outlet }}</option> 
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Nama Produk</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <div class="select2-input">
                                            <select class="form-control form-control" id="kategori">
                                                {{-- <option value="all" selected disabled>-- Pilih Kategori -- </option> --}}
                                            </select>
                                        </div>
                                        <small id="kategori" class="form-text text-muted">Pilih salah satu kategori, jika masih kosong silahkan Anda buat kategori terlebih dahalu di menu Kategori.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="text" name="harga" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">				
                                    <div class="form-group">
                                        <label for="sku">SKU</label>
                                        <input type="text" name="harga" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="barcode">Barcode</label>
                                        <input type="text" name="barcode" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="satuan">Satuan Stok</label>
                                        <div class="select2-input">
                                            <select class="form-control form-control" id="satuan">
                                                {{-- <option value="all" selected disabled>-- Pilih Kategori -- </option> --}}
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="satuan">Foto Produk</label>
                                        <div class="col-lg-4 col-md-9 col-sm-8">
                                            <div class="input-file input-file-image">
                                                <img class="img-upload-preview" width="150" height="150" src="http://placehold.it/100x100" alt="preview">
                                                <input type="file" class="form-control form-control-file" id="uploadImg" name="uploadImg" accept="image/*">
                                                <label for="uploadImg" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i> Upload Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade active show" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                                    <div class="accordion accordion-secondary">
                                        <div class="card">
                                            <div class="card-header collapsed" id="headingTwo" 
                                            data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                                            <div class="span-icon">
                                                <div class="flaticon-box-1"></div>
                                            </div>
                                            <div class="span-title">
                                                Pengaturan Lanjutan (Opsional)
                                            </div>
                                            <div class="span-mode"></div>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-6">
                                                        <div class="form-group">
                                                            <label for="kategori">Produk ini dijual ?</label>
                                                            <br>
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="dijual" value="1" class="selectgroup-input" checked>
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-check"></i></span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="dijual" value="2" class="selectgroup-input">
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kategori">Produk ini ingin kelola Stok ?</label>
                                                            <br>
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="stok" value="1" class="selectgroup-input">
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-check"></i></span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="stok" value="2" class="selectgroup-input" checked>
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kategori">Deskripsi Produk</label>
                                                            <textarea class="form-control" id="comment" rows="5"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="harga">Pajak</label>
                                                            <select class="form-control form-control" id="pajak">
                                                                <option value="1">Mengikuti Pajak Outlet </option>
                                                                <option value="2">Tidak Ada Pajak </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6">				
                                                        <div class="form-group">
                                                            <label for="kategori">Varian Produk</label>
                                                            <small id="kategori" class="form-text text-muted">Apakah produk ini memiliki varian seperti warna dan ukuran ?</small>
                                                            <br>
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="varian" value="1" class="selectgroup-input">
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-check"></i></span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="varian" value="2" class="selectgroup-input" checked>
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="barcode">Opsi Tambahan</label>
                                                            <br>
                                                            <div class="selectgroup selectgroup-secondary selectgroup-pills">
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="opsi_tambahan" value="1" class="selectgroup-input">
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-check"></i></span>
                                                                </label>
                                                                <label class="selectgroup-item">
                                                                    <input type="radio" name="opsi_tambahan" value="2" class="selectgroup-input" checked>
                                                                    <span class="selectgroup-button selectgroup-button-icon"><i class="fas fa-times"></i></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="kategori">Jenis Produk</label>
                                                            <br>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
                                                                <label class="custom-control-label" for="customRadio1">Tunggal</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" >
                                                                <label class="custom-control-label" for="customRadio2">Punya Bahan Baku</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-action">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('produk.index') }}" class="btn btn-danger btn-border">Batal</a>
                            <input class="btn btn-success" type="submit" value="Simpan">
                        </div>										
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        //KETIKA PERTAMA KALI DI-LOAD MAKA TANGGAL NYA DI-SET TANGGAL SAA PERTAMA DAN TERAKHIR DARI BULAN SAAT INI
        $(document).ready(function() {
            let start = moment().startOf('month')
            let end = moment().endOf('month')

            //KEMUDIAN TOMBOL EXPORT PDF DI-SET URLNYA BERDASARKAN TGL TERSEBUT
            // $('#exportpdf').attr('href', '/administrator/reports/order/pdf/' + start.format('YYYY-MM-DD') + '+' + end.format('YYYY-MM-DD'))

            //INISIASI DATERANGEPICKER
            $('#created_at').daterangepicker({
                startDate: start,
                endDate: end
            }, function(first, last) {
                //JIKA USER MENGUBAH VALUE, MANIPULASI LINK DARI EXPORT PDF
                // $('#exportpdf').attr('href', '/administrator/reports/order/pdf/' + first.format('YYYY-MM-DD') + '+' + last.format('YYYY-MM-DD'))
                console.log(first.format('YYYY-MM-DD'))
                let outlets = $('#outlets').val()
                console.log(outlets)
            })
        })

        $('#kategori').select2({
			theme: "bootstrap"
		});
        $('#outlet').select2({
			theme: "bootstrap"
		});
        $('#satuan').select2({
			theme: "bootstrap"
		});
    </script>
    <script>
        $(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});
		});
    </script>
@endsection
