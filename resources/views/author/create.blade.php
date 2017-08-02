@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Author</h1></center>
	<div class="panel-heading">
	<div class="panel-panel-primary"
		Data Author
		<div class="panel-title pull-right">
		<a class="btn btn-info" href="{{URL::previous()}}">Kembali</a></div>
		</div>
		<div class="panel-body">
			<form action="{{route('author.store')}}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Nama Author</label>
					<input type="text" name="author" class="form-control" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-succes">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
				</div>




			</form>


		</div>

	</div>




</div>
@endsection