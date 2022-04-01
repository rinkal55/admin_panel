@extends('master.app')

@section('pagetitle','Add Company')

@section('content')
<div class="d-flex justify-content-center">
<div class="col-md-12">
	<div class="card">
		<div class="card-header ">
			Add Employee Detail
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

			
			<form method="post">
				@csrf
				<table class="table table-borderless">
					<tr>
						<td>Firstname</td>
						<td><input type="text" name="firstname" class="form-control"/></td>
					</tr>
					<tr>
						<td>Lastname</td>
						<td><input type="text" name="lastname" class="form-control" /></td>
					</tr>
					<tr>
						<td>Company</td>
						<td>
							<select name="company_id" class="form-control">
								<option value="">Select Company</option> 
								
									@foreach($company_data as $cdata)
			            <option value="{{ $cdata->id }}">{{ $cdata->name}}</option>
			        		@endforeach
									
							</select>
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" class="form-control" /></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input type="number" name="phone" class="form-control" /></td>
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
