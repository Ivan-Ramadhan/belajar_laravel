<!DOCTYPE html>
<html>
<head>
	<title>Import Excel Ke Database Dengan Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
 
	<div class="container">
		<center>
			<h4>Import Excel Ke Database Dengan Laravel</h4>
			
		</center>
 
		{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif
 
		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button> 
			<strong>{{ $sukses }}</strong>
		</div>
		@endif
 
		<button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
			IMPORT EXCEL
		</button>
 
		<!-- Import Excel -->
		<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
						</div>
						<div class="modal-body">
 
							{{ csrf_field() }}
 
							<label>Pilih file excel</label>
							<div class="form-group">
								<input type="file" name="file" required="required">
							</div>
 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Import</button>
						</div>
					</div>
				</form>
			</div>
		</div>
 
 
		
		<a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
 
		<table class='table table-bordered'>
			<thead>
				<tr>
					
					<th>WH_SO</th>
					<th>ONT_ZTE_F609</th>
					<th>ONT_ZTE_F670</th>
					<th>ONT_HUAWEI_HG8245H5</th>
					<th>ONT_HUAWEI_HG8245HU</th>
					<th>ONT_NOKIA_G240WF</th>
					<th>STB_ZTE_B7005</th>
					<th>STB_FIBERHOME_HG680P</th>
					<th>WIFI_EXTENDER_EDIMAX_EW7438RPN</th>
					<th>TLC_TPLINK_TLPA4010</th>
					<th>INDIBOX_AKARI_AZ117ATV</th>
					<th>WIRELESS_IOT</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($siswa as $s)
				<tr>

					<td>{{$s->WH_SO}}</td>
					<td>{{$s->ONT_ZTE_F609}}</td>
					<td>{{$s->ONT_ZTE_F670}}</td>
					<td>{{$s->ONT_HUAWEI_HG8245H5}}</td>
					<td>{{$s->ONT_HUAWEI_HG8245HU}}</td>
					<td>{{$s->ONT_NOKIA_G240WF}}</td>
					<td>{{$s->STB_ZTE_B7005}}</td>
					<td>{{$s->STB_FIBERHOME_HG680P}}</td>
					<td>{{$s->WIFI_EXTENDER_EDIMAX_EW7438RPN}}</td>
					<td>{{$s->TLC_TPLINK_TLPA4010}}</td>
					<td>{{$s->INDIBOX_AKARI_AZ117ATV}}</td>
					<td>{{$s->WIRELESS_IOT}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 
 
	<form method="post" action="/siswa/import_excel" enctype="multipart/form-data">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
		</div>
		<div class="modal-body">
 
			{{ csrf_field() }}
 
			<label>Pilih file excel</label>
			<div class="form-group">
				<input type="file" name="file" required="required">
			</div>
 
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Import</button>
		</div>
	</div>
</form>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>