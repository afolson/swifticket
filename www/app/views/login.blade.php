@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<form class="form-horizontal well" method="POST" action="{{ URL::to('login/butt/login') }}">
			<legend>Staff Login</legend>
			<div class="form-group">
				<label class="control-label col-sm-3">Username:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="username" value="{{{ Input::old('username') }}}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Password:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-9 col-sm-offset-3">
					<button type="submit" class="btn btn-success btn-lg">Login</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop