<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<form class="form-horizontal well" method="POST" action="{{ URL::to('tickets/butt/status') }}">
			<legend>Check Ticket Status</legend>
			<div class="form-group">
				<label class="control-label col-sm-3">Email:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="email" value="{{{ Input::old('email') }}}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Ticket ID:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="ticketID" value="{{{ Input::old('ticketID') }}}">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-9 col-sm-offset-3">
					<button type="submit" class="btn btn-success btn-lg">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>