@extends('layouts.dashboard')
@section('title')
    Pajak & Service
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
                                    <h4 class="page-title">Pajak & Service</h4>
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
                                            <a href="{{ route('outlets.index') }}">Outlet</a>
                                        </li>
                                        <li class="separator">
                                            <i class="flaticon-right-arrow"></i>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#">Pajak & Service</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-tools">
                                    <a href="{{ route('produk.create') }}" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fas fa-plus-circle"></i>
                                        </span>
                                        Tambah Service
                                    </a>
                                    <a href="{{ route('produk.create') }}" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fas fa-plus-circle"></i>
                                        </span>
                                        Tambah Pajak
                                    </a>
                                </div>
                            </div>
                            <div class="nav nav-line nav-color-info d-flex align-items-center justify-contents-center">
                                <a class="btn nav-link {{ (request()->is('outlets')) ? 'active' : ''}}" href="{{ route('outlets.index') }}">OUTLET</a>
                                <a class="nav-link {{ (request()->is('tax-service')) ? 'active' : ''}}" href="{{ route('tax-service.index') }}">PAJAK & SERVICE</a>
                                <a class="nav-link" href="{{ route('kategori.index') }}">DESAIN STRUK</a>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control form-control" id="outlets">
                                        <option value="all" selected>Semua Outlet</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-control" id="outlets">
                                        <option value="all" selected>Status</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="table-responsive">
                                <br>
                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr>
                                            <th>NAMA</th>
                                            <th>TIPE</th>
                                            <th>JUMLAH</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td></td>
                                            <td></td>
                                        </tr>
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
