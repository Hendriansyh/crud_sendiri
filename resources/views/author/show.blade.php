@extends('layouts.master')
@section('isi')
<div class="row">
	<center><h1>Data Orangtua</h1></center>
	<div class="panel-heading">
	<div class="panel-panel-primary"
		Data Orangtua
		<div class="panel-title pull-right">
		<a class="btn btn-danger" href="{{URL::previous()}}">Kembali</a></div>
		</div>
				
				<div class="form-group">
					<label class="control-lable">Nama Author</label>
					<input type="text" name="a" class="form-control" value="{{$author->name}}" readonly="">
				</div>



			</form>


		</div>

	</div>




</div>
@endsection