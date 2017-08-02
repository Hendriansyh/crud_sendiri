@extends('layouts.master')
@section('isi')
	<div class="row">
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
		<div class="panel panel-primary">
		<div class="panel panel-heading">Data Author</div>
		<div class="panel panel-heading-right">
		<center>
		<a class="btn btn-success" href="/author/create">Tambah Data</a></div></center>
		<div class="panel-body">	
				<table class="table">
					<thread>
						<tr>
							<th>Nama Author</th>
							<th colspan="3"><center>Action</center></th>
						</tr>
					</thread>
					<tbody>
						@foreach($author as $data)
						<tr>
							<td>{{$data->name}}</td>
							<td>
								@foreach($data->book as $a)
								<li>{{$a->name}}</li>
								@endforeach
							</td>
							<td>
								<a class="btn btn-warning" href="/author/{{$data->id}}/edit">Edit</a></td> |
								<td>
								<a class="btn btn-primary" href="/author/{{$data->id}}">Show</a></td> |
								<td>
								<form action="{{route('author.destroy',$data->id)}}" method="post">
								<input name="_method" type="hidden" value="DELETE">
								<input name="_token" type="hidden">
								<input class="btn btn-danger" type="submit" value="DELETE">
								{{csrf_field()}}
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