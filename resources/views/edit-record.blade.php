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
					$company = DB::table('company')->where('id', $id)->first();
				?>
				<form method="post" action="<?php echo url('home/edit/'); ?>" enctype="multipart/form-data">
					@csrf
					<table class="table table-borderless">
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" class="form-control" value="<?php echo $company->name; ?>" /></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" class="form-control" value="<?php echo $company->email; ?>" /></td>
						</tr>
						<tr>
							<td>Logo</td>
							<td>
								<img src="{{ asset('storage/app/public/' . $company->logo) }}" height="100px" width="100px">
								<input type="file" name="logo" class="form-control" />
								<input type="hidden" name="logo_image" value="<?php echo $company->logo;?>">
							</td>
						</tr>
						<tr>
							<td></td>
							<td><span>Please Insert Minimum 100*100 size</span></td>
						</tr>
						<tr>
							<td>Website</td>
							<td><input type="text" name="website" class="form-control" value="<?php echo $company->website; ?>" /></td>
						</tr>
						<tr>
							<td></td>
							<td>
								<input type="hidden" name="id" class="form-control" value="<?php echo $company->id; ?>" />
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
