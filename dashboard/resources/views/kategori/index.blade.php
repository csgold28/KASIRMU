@extends('layouts.dashboard')
@section('title')
    Kategori
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
                                    <h4 class="page-title">Kategori</h4>
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
                                            <a href="#">Kategori</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-tools">
                                    <a href="{{ route('kategori.create') }}" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fas fa-plus-circle"></i>
                                        </span>
                                        Tambah Kategori
                                    </a>
                                </div>
                            </div>
                            <div class="nav nav-line nav-color-info d-flex align-items-center justify-contents-center">
                                <a class="btn nav-link" href="{{ route('produk.index') }}">PRODUK</a>
                                <a class="nav-link {{ (request()->is('opsi-tambahan')) ? 'active' : ''}}" href="{{ route('opsi-tambahan.index') }}">OPSI TAMBAHAN</a>
                                <a class="nav-link {{ (request()->is('kategori')) ? 'active' : ''}}" href="{{ route('kategori.index') }}">KATEGORI</a>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="table-responsive">
                                <br>
                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Jumlah Produk</th>
                                            <th>aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($category as $item)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
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
