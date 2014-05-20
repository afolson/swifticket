<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<form class="form-horizontal well" method="POST" action="{{ URL::to('tickets/butt/create') }}">
			<legend>Submit a Ticket</legend>
			<div class="alert alert-info">
				<p>Please provide as much detail as possible so we can better assist you. <a href="{{ URL::to('tickets/status', array(), true) }}">Click here</a> to update a previously submitted ticket.</p>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Full Name:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="name" value="{{{ Input::old('name') }}}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Email:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="email" value="{{{ Input::old('email') }}}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Help Topic:</label>
				<div class="col-sm-9">
					<select class="form-control" name="topic">
						<option disabled selected>Select...</option>
						<option>Ban Support</option>
						<option>Network Administrator Support</option>
						<option>IRC Operator Support</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Subject:</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" name="subject" value="{{{ Input::old('subject') }}}">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-3">Message:</label>
				<div class="col-sm-9">
					<textarea class="form-control" name="message" rows="10">{{{ Input::old('message') }}}</textarea>
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