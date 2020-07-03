@extends('adminlte.master')

@section('content')
	<h1>Pertanyaan</h1>
	<table class="table">
	    <thead>
	      <tr>
	        <th>No</th>
	        <th>Judul Pertanyaan</th>
	        <th>Isi Pertanyaan</th>
	        <th>Tanggal Dibuat</th>
	      </tr>
	    </thead>
	    	@foreach($pertanyaan as $key => $tanya)
	    		<tr>
	    			<td>{{$key+1}}</td>
	    			<td>{{$tanya->judul}}</td>
	    			<td>{{$tanya->isi}}</td>
	    			<td>{{$tanya->tgl_dibuat}}</td>
	    		</tr>
	    	@endforeach
	    <tbody>
	    </tbody>
	</table>
@endsection