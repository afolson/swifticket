<?php

class TicketController extends BaseController {

	public function index() {
		return $this->render('tickets/index');
	}
	

	public function getCreate() {
		return $this->render('tickets/create');
	}

	public function postCreate() {

	}


	public function getStatus() {
		return $this->render('tickets/status');
	}

	public function postStatus() {

	}
}