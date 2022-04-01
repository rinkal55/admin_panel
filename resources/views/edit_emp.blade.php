@extends('master.app')

@section('pagetitle','Edit Record')

@section('content')

<div class="d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header ">
				Update Records	
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
				<?php
					$employee = DB::table('employee')->where('id', $id)->first();
				?>
				<form method="post" action="<?php echo url('employee/edit/'); ?>">
					@csrf
					<table class="table table-borderless">
						<tr>
							<td>Firstname</td>
							<td><input type="text" name="firstname" class="form-control" value="<?php echo $employee->firstname; ?>"  /></td>
						</tr>
						<tr>
							<td>Lastname</td>
							<td><input type="text" name="lastname" class="form-control" value="<?php echo $employee->lastname; ?>" /></td>
						</tr>
						<tr> 
						<td>Company</td>
						<td>
							<select name="company_id" class="form-control">
								<option value="">Select Company</option> 
								<?php
									$company = DB::table('company')->get()->toArray();
									//print_r($company);
									foreach ($company as $c) {
								?>
								<option value="<?php echo $c->id; ?>" <?php if($employee->company == $c->id){ echo "selected"; } ?> ><?php echo $c->name; ?></option>
								<?php
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" class="form-control" value="<?php echo $employee->email ?>" /></td>
					</tr>
					<tr>
						<td>Phone</td>
						<td><input type="number" name="phone" class="form-control" value="<?php echo $employee->phone ?>"/></td>
					</tr>
					<tr>
						<tr>
							<td></td>
							<td>
								<input type="hidden" name="id" class="form-control" value="<?php echo $employee->id; ?>" />
								<input type="submit" name="submit" value="Update Record" class="btn-submit" />
							</td>
						</tr>
					</table>

				</form>
			</div>
		</div>
	</div>
</div>

@endsection
