<?php
namespace controllers;

use controllers\crud\datas\GitEditDatas;
use Ubiquity\controllers\crud\CRUDDatas;
use controllers\crud\viewers\GitEditViewer;
use Ubiquity\controllers\crud\viewers\ModelViewer;
use controllers\crud\events\GitEditEvents;
use Ubiquity\controllers\crud\CRUDEvents;
use controllers\crud\files\GitEditFiles;
use Ubiquity\controllers\crud\CRUDFiles;


class GitEdit extends \Ubiquity\controllers\crud\CRUDController {

	public function __construct(){
		parent::__construct();
		\Ubiquity\orm\DAO::start();
		$this->model='models\\Gitsource';
		$this->style='';
	}

	public function _getBaseRoute(): string {
		return 'GitEdit';
	}
	
	protected function getAdminData(): CRUDDatas {
		return new GitEditDatas($this);
	}

	protected function getModelViewer(): ModelViewer {
		return new GitEditViewer($this,$this->style);
	}

	protected function getEvents(): CRUDEvents {
		return new GitEditEvents($this);
	}

	protected function getFiles(): CRUDFiles {
		return new GitEditFiles();
	}


}
