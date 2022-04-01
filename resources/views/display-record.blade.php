@extends('master.app')

@section('pagetitle','Display Record')

@section('content')

<div class="d-flex justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header ">
				Companies
			</div>
			<br/>
			<div>
				<form action="<?php echo url('home/addcompany') ?>" method="post">
					@csrf
    			<button type="submit" class="btn btn-success" style="margin-left: 20px;"> Create New Company </button>
				</form>

			</div>
			<div class="card-body">
				@include('master.msg')
				<table class="table table-bordered">
					<tr>
						<th colspan="5">Companies List</th>
					</tr>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Logo</th>
						<th>Website</th>
						<th>Action</th>											
					</tr>
					<?php
						//$company = DB::table('company')->get()->toArray();
						$company = DB::table('company')->paginate(10);
						foreach ($company as $v) {
						
					?>
					<tr>
						<td><?php echo $v->name; ?></td>
						<td><?php echo $v->email; ?></td>
						<td><img src="{{ asset('storage/app/public/' . $v->logo) }}" height="100px;" width="100px;"></td>
						<td><?php echo $v->website; ?></td>
						<td>
							<a href="<?php echo url('home/edit/'.$v->id) ?>">Edit</a> | 
							<a href="<?php echo url('home/delete/'.$v->id) ?>">Delete</a>
						</td>
					</tr>
					<?php
						}
					?>
				</table>
				{{$company->links()}}
			</div>
		</div>
	</div>
</div>

@endsection
