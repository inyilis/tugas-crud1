@extends('adminlte.master')

@section('content')
<div class="ml-3 mt-3">
	<div class="card card-primary">
		<div class="card-header">
			<h1 class="card-title">Data Pertanyaan</h1>
		</div>
		<div class="card-body">
			<a href="/pertanyaan/create" class="btn btn-primary mb-2 mt-2">Buat Pertanyaan Baru</a>
			<table class="table">
			    <thead>
			      <tr>
			        <th style="width: 10px">No</th>
			        <th>Judul Pertanyaan</th>
			        <th>Isi Pertanyaan</th>
			        <th style="width: 250px">Actions</th>
			      </tr>
			    </thead>
			    <tbody>
			    	@foreach($pertanyaan as $key => $tanya)
			    		<tr>
			    			<td>{{$key+1}}</td>
			    			<td>{{$tanya->judul}}</td>
			    			<td>{{$tanya->isi}}</td>
			    			<td>
			    				<a href="/jawaban/{{$tanya->id}}" class="btn btn-sm btn-success">Jawab</a>
			    				<a href="/pertanyaan/{{$tanya->id}}" class="btn btn-sm btn-info">Show</a>
			    				<a href="/pertanyaan/{{$tanya->id}}/edit" class="btn btn-sm btn-default">Update</a>
			    				<form action="/pertanyaan/{{$tanya->id}}" method="POST" style="display: inline">
			    					@csrf
			    					@method('DELETE')
			    					<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
			    				</form>
			    			</td>
			    		</tr>
			    	@endforeach
			    </tbody>
			</table>
		</div>
	</div>
</div>
@endsection