@extends('layout.app')

@section('style')
@endsection

@section('script')
@endsection

@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
		<div class="card-header">
			<h3 class="card-title">Edit Data User</h3>
		</div>
		<div class="card-body">
			<form role="form" method="POST" action="{{ asset('') }}update">
				{{ csrf_field() }}
				<div class="card-body">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="hidden" name="txtid" class="form-control" value="{{$user->id}}">
						<input type="text" name="txtnama" class="form-control" value="{{$user->namalengkap}}" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="txtemail" class="form-control" value="{{$user->email}}" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="txtuname" class="form-control" value="{{$user->uname}}" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="txtupass" class="form-control" value="{{$user->upass}}" placeholder="Password">
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
		</div>
	</div>	
	</div>
</div>
@endsection