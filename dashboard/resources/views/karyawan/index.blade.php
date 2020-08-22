@extends('layouts.dashboard')
@section('title')
    Karyawan
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
                                    <h4 class="page-title">Karyawan</h4>
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
                                            <a href="#">Karyawan</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-tools">
                                    <a href="{{ route('produk.create') }}" class="btn btn-info btn-border btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fas fa-plus-circle"></i>
                                        </span>
                                        Tambah Karyawan
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control form-control" id="outlets">
                                        <option value="all" selected>Semua Outlet</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-control" id="outlets">
                                        <option value="all" selected>Jenis Karyawan</option>
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
                                            <th>JENIS</th>
                                            <th>OUTLET</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>61</td>
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
