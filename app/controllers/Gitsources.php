<?php
namespace controllers;

/**
 * Controller Gitsources
 */

class Gitsources extends \controllers\ControllerBase {

	public function index(){
	    //TODO index action implementation
		$this->loadView("Gitsources/index.html");
	}
}
