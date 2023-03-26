<?php
namespace controllers\crud\files;


use Ubiquity\controllers\crud\CRUDFiles;

/**
 * Class GitEditFiles
 */

class GitEditFiles extends CRUDFiles {
	public function getViewForm(): string {
		return "GitEdit/form.html";
	}

	public function getViewIndex(): string {
		return "GitEdit/index.html";
	}

	public function getViewDisplay(): string {
		return "GitEdit/display.html";
	}


}
