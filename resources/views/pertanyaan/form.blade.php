@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-primary">
		<div class="card-header">
			<h1 class="card-title">Buat Pertanyaan</h1>
		</div>
		<form action="/pertanyaan" method="POST">
			@csrf
			<div class="card-body">
				<div class="form-group">
					<label for="name">Judul : </label>
					<input type="text" class="form-control" placeholder="Enter Judul" name="judul">
				</div>
				<div class="form-group">
					<label for="name">Isi : </label>
					<input type="text" class="form-control" placeholder="Enter Isi" name="isi">
				</div>

				<input type="hidden" name="tgl_dibuat" value="<?php 
				date_default_timezone_set('Asia/Jakarta');
				echo date('d-M-Y / H:i:s a'); ?>">

				<input type="hidden" name="tgl_diupdate" value="<?php 
				date_default_timezone_set('Asia/Jakarta');
				echo date('d-M-Y / H:i:s a'); ?>">

				<a href="/pertanyaan" class="btn btn-primary">Kembali</a>
				<button type="submit" class="btn btn-primary">Buat</button>
			</div>
		</form>
	</div>
</div>
@endsection