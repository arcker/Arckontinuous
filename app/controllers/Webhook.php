<?php
namespace controllers;

/**
 * Controller Webhook
 */
use Ubiquity\core\postinstall\Display;
use Ubiquity\log\Logger;
use Ubiquity\themes\ThemesManager;
use Ubiquity\views\engine\latte\Latte;


class Webhook extends ControllerBase {

	public function index(){
		$latte = new Latte;
		// $latte->
		// $latte->setTempDirectory(__DIR__ . '/temp');
		// $latte->setautoRefresh();
		// $options = $k8s->getOptions();
		// $kubeConfig = $options->getKubeConfigContext();
		// echo ($kubeConfig->getServer());

		// $parameters['kubeconfig'] = $kubeConfig->getServer();
	
		$parameters['items'] = ['one', 'two', 'three'];
		$latte->render('Webhooks/index.latte', $parameters);
		

	}
}

