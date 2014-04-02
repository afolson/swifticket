<?php

class DragonController extends BaseController {

	public function create() {
		return View::make('hello');
	}

	public function index() {
		return $this->render('dragon');
	}
}