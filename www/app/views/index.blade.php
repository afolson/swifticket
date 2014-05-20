<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="well">
			<h3>Welcome to SwifTicket!</h3>
			<p>In order to streamline support requests and better serve you, we utilize a support ticket system. Every support request is assigned a unique ticket number which you can use to track the progress and responses online. For your reference we provide complete archives and history of all your support requests. A valid email address is required.</p>
			<p>This text is copied directly from osTicket.</p>
			<div class="btn-group btn-group-justified">
				<a href="{{ URL::to('tickets/create') }}" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> Submit A Ticket</a>
				<a href="{{ URL::to('tickets/status') }}" class="btn btn-info"><i class="glyphicon glyphicon-question-sign"></i> Check Ticket Status</a>
			</div>
		</div>
	</div>
</div>