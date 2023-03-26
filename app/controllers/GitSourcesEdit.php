<?php
namespace controllers;




class GitSourcesEdit extends \Ubiquity\controllers\crud\CRUDController {

	public function __construct(){
		parent::__construct();
		\Ubiquity\orm\DAO::start();
		$this->model='models\\Gitsource';
		$this->style='';
	}

	public function _getBaseRoute(): string {
		return 'GitSourcesEdit';
	}
	

}
