@extends('layout.app')

@section('content')
<div class="row">
	<div class="col-12">

	<div class="card">
		<div class="card-header">
			<h3 class="card-title">Tambah Data User</h3>
		</div>
		<div class="card-body">
			<form role="form" method="POST" action="{{ asset('') }}simpan">
				{{ csrf_field() }}
				<div class="card-body">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="txtnama" class="form-control" placeholder="Nama Lengkap">
					</div>
					<div class="form-group">
						<label>Email Address</label>
						<input type="email" name="txtemail" class="form-control" placeholder="Email">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="txtuname" class="form-control" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="txtupass" class="form-control" placeholder="Password">
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>	
	</div>
</div>
@endsection