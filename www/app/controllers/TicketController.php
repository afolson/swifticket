<?php

class TicketController extends BaseController {

	public function index() {
		return View::make('tickets/index');
	}
	

	public function getCreate() {
		return View::make('tickets/create');
	}

	public function postCreate() {

	}


	public function getStatus() {
		return View::make('tickets/status');
	}

	public function postStatus() {

	}
}