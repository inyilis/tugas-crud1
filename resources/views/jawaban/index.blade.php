@extends('adminlte.master')

@section('content')
	<h1>Jawaban</h1>
	<table class="table">
	    <thead>
	      <tr>
	        <th>ID Pertanyaan</th>
	        <th>Isi Jawaban</th>
	        <th>Tanggal Dibuat</th>
	      </tr>
	    </thead>
	    	@foreach($jawaban as $key => $jawab)
	    		<tr>
	    			<td>{{$jawab->id_pertanyaan}}</td>
	    			<td>{{$jawab->isi}}</td>
	    			<td>{{$jawab->tgl_dibuat}}</td>
	    		</tr>
	    	@endforeach
	    <tbody>
	    </tbody>
	</table>

	<div class="ml-3">
	<form action="/jawaban/{$id_pertanyaan}" method="POST">
	  @csrf
	  <h1>Buat Jawaban</h1>
	  <input type="hidden" name="id_pertanyaan" value="<?php echo $id_pertanyaan ?>">

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