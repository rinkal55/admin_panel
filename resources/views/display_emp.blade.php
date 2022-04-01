@extends('master.app')

@section('pagetitle','Display Record')

@section('content')

<div class="d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header ">
				Employees
			</div>
			<br/>
			<div>
				<form action="<?php echo url('employee/addemployee') ?>" method="post">
					@csrf
    			<button type="submit" class="btn btn-success" style="margin-left: 20px;"> Create New Employee </button>
				</form>

			</div>
			<div class="card-body">
				@include('master.msg')
				<table class="table table-bordered">
					<tr>
						<th colspan="6">Companies List</th>
					</tr>
					<tr>
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Company</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Action</th>											
					</tr>
					<?php
						//$employee = DB::table('employee')->get()->toArray();
					$employee = DB::table('employee')->paginate(10);
						foreach ($employee as $v) {
					?>
					<tr>
						<td><?php echo $v->firstname; ?></td>
						<td><?php echo $v->lastname; ?></td>
						<?php
							$id = $v->company;
							$company = DB::table('company')->where('id',$id)->get();
							foreach ($company as $c) {	
						?>
						<td><?php echo $c->name; ?></td>
						<?php	
							}
						?>
						<td><?php echo $v->email; ?></td>
						<td><?php echo $v->phone; ?></td>
						<td>
							<a href="<?php echo url('employee/edit/'.$v->id) ?>">Edit</a> | 
							<a href="<?php echo url('employee/delete/'.$v->id) ?>">Delete</a>
						</td>
					</tr>
					<?php
						}
					?>
				</table>
				{{$employee->links()}}
			</div>
		</div>
	</div>
</div>

@endsection
