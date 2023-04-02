<?php
require  __DIR__ . '/../vendor/autoload.php';

use K8s\Api\Model\Api\Core\v1\Pod;
use K8s\Client\K8sFactory;

$httpFactory = new K8s\HttpSymfony\ClientFactory([
    'verify_peer' => false
    // 'verify_host' => false,
]);


$k8s = (new K8sFactory())->loadFromKubeConfig(null,$httpFactory);


$options = $k8s->getOptions();
$kubeConfig = $options->getKubeConfigContext();

// $this->assertInstanceOf(K8s::class, $result);
echo ($options->getEndpoint());
echo ($kubeConfig->getNamespace() . "\n");
// echo ($kubeConfig->getName() . "`n");
echo ($kubeConfig->getServerCertificateAuthorityData());
echo ($kubeConfig->getUserClientCertificate());
echo ($kubeConfig->getUserClientKey());

// var_dump($kubeConfig);
// var_dump($k8s);

/** @var Pod $pod */
foreach ($k8s->listAll(Pod::class) as $pod) {
    echo sprintf(
        "%s\t%s\t%s\t%s",
        $pod->getPodIP(),
        $pod->getNamespace(),
        $pod->getName(),
        $pod->getGenerateName()
    ) . PHP_EOL;
}