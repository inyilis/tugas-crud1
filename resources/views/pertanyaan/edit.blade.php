@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">Edit Pertanyaan</h3>
		</div>
		<form action="/pertanyaan/{{$pertanyaan->id}}" method="POST">
			@csrf
			@method('PUT')
			<div class="card-body">
			  <div class="form-group">
			    <label for="judul">Judul : </label>
			    <input type="text" class="form-control" name="judul" value="{{$pertanyaan->judul}}">
			  </div>
			  <div class="form-group">
			    <label for="isi">Isi : </label>
			    <input type="text" class="form-control" name="isi" value="{{$pertanyaan->isi}}">
			  </div>

			  <input type="hidden" name="tgl_dibuat" value="{{$pertanyaan->tgl_dibuat}}">

			  <input type="hidden" name="tgl_diupdate" value="<?php 
				date_default_timezone_set('Asia/Jakarta');
				echo date('d-M-Y / H:i:s a'); ?>">
				
			  <a href="/pertanyaan" class="btn btn-primary">Kembali</a>
			  <button type="submit" class="btn btn-primary">Update</button>
		  </div>
		</form>
	</div>
</div>
@endsection