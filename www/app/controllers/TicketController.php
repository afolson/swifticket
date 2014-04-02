<?php

class TicketController extends BaseController {

	public function index() {
		return $this->render('tickets/index');
	}

	public function create() {
		return $this->render('tickets/create');
	}

	public function status() {
		return $this->render('tickets/status');
	}
}