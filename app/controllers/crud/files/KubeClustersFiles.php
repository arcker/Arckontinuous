<?php
namespace controllers\crud\files;


use Ubiquity\controllers\crud\CRUDFiles;

/**
 * Class KubeClustersFiles
 */

class KubeClustersFiles extends CRUDFiles {
	public function getViewDisplay(): string {
		return "KubeClusters/display.html";
	}


}
