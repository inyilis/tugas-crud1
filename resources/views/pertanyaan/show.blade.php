@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-primary">
		<div class="card-header">
			<h3 class="card-title">{{$pertanyaan->judul}}</h3>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
			      <tr>
			        <th>Isi Pertanyaan</th>
			        <th>Tanggal Dibuat</th>
			        <th>Tanggal Diperbarui</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<tr>
			          <td>{{$pertanyaan->isi}}</td>
			          <td style="width: 200px">{{$pertanyaan->tgl_dibuat}}</td>
			          <td style="width: 200px">{{$pertanyaan->tgl_diupdate}}</td>
			      	</tr>
			    </tbody>

			    <thead>
			      <tr>
			        <th>Jawban</th>
			        <th>Tanggal Dibuat</th>
			        <th>Tanggal Diperbarui</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach($jawaban as $key => $jawab)
			    		<tr>
			    			<td>{{$jawab->isi}}</td>
			    			<td>{{$jawab->tgl_dibuat}}</td>
			    			<td>{{$jawab->tgl_diupdate}}</td>
			    		</tr>
			    	@endforeach
			    </tbody>
			</table>
			<a href="/pertanyaan" class="btn btn-primary mt-4">Kembali</a>
		</div>
	</div>
</div>
@endsection