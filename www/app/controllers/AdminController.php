<?php

class AdminController extends BaseController {

	public function index() {
		return View::make('admin/index');
	}

	public function getUsers() {
		return View::make('admin/users');
	}

	public function getUser($id) {

	}

	public function getSettings() {
		return View::make('admin/settings');
	}

}