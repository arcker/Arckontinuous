<?php
namespace controllers;
use Ubiquity\views\engine\latte\Latte;
// use Ubiquity\views\engine\latte\LatteTemplateGenerator;
//
// // add K8s-client
use K8s\Api\Model\Api\Core\v1\Pod;
use K8s\Client\K8sFactory;
/**
 * Controller Pods
 */

class Pods extends \controllers\ControllerBase {

	public function index(){
	    //TODO index action implementation
		$latte = new Latte;

		$httpFactory = new \K8s\HttpSymfony\ClientFactory([
			'verify_peer' => false
			// 'verify_host' => false,
		]);
		
		$k8s = (new K8sFactory())->loadFromKubeConfigData(file_get_contents(getenv("HOME").'/.kube/config'),null,$httpFactory);

		$options = $k8s->getOptions();
		$kubeConfig = $options->getKubeConfigContext();
		// echo ($kubeConfig->getServer());
		$parameters['kubeconfig'] = $kubeConfig->getServer();

		$parameters['pods'] = $k8s->listAll(Pod::class);
				
		// $parameters['items'] = ['one', 'two', 'three'];
		$latte->render('Pods/index.latte', $parameters);
		// echo "-----";
	}
}
