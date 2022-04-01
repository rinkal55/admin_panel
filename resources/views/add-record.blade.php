@extends('master.app')

@section('pagetitle','Add Company')

@section('content')
<div class="d-flex justify-content-center">
<div class="col-md-12">
	<div class="card">
		<div class="card-header ">
			Add Company Detail
		</div>
		<div class="card-body">
			@include('master.msg')
				@if(count($errors))
					<div class="alert alert-danger">
						<ul>
							@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

			<form method="post" enctype="multipart/form-data">
				@csrf
				<table class="table table-borderless">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" class="form-control"/></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" class="form-control" /></td>
					</tr>
					<tr>
						<td>Logo</td>
						<td><input type="file" name="logo" class="form-control" /></td>
					</tr>
					<tr>
						<td></td>
						<td><span>Please Insert Minimum 100*100 size</span></td>
					</tr>
					<tr>
						<td>Website</td>
						<td><input type="text" name="website" class="form-control" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Add Record" class="btn-submit" /></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</div>

@endsection
