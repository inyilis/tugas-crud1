@extends('adminlte.master')

@section('content')
<div class="ml-3">
	<form action="/pertanyaan" method="POST">
		@csrf
		<h1>Buat Pertanyaan</h1>
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
	  echo date('l, d-M-Y / H:i:s a'); ?>">

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
@endsection