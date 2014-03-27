<?php

class BaseController extends Controller {

	protected $layout = 'layouts.default';

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	// Custom function, shortcut for nesting views / content
	// Access content in nested views with $content
	protected function render($view, $content = NULL) {
		$this->layout->content = View::make($view)->with('content', $content);
	}

}