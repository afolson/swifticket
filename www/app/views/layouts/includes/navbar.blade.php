<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">SWIFTICKET</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ URL::route('tickets/status', array(), false) }}">Check Status</a></li>
      </ul>
      <a href="{{ URL::route('tickets/create', array(), false) }}" class="btn btn-success navbar-btn navbar-right"><i class="glyphicon glyphicon-plus"></i> Submit A Ticket</a>
    </div>
  </div>
</nav>