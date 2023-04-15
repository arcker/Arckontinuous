<?php
use Ubiquity\controllers\Router;

\Ubiquity\cache\CacheManager::startProd($config);
\Ubiquity\orm\DAO::start();
Router::start();
Router::addRoute("_default", "controllers\\IndexController");
\Ubiquity\assets\AssetsManager::start($config);
$str = rand();
$result = hash("sha256", $str);
file_put_contents("routes.txt",$result);
Router::addRoute("8b97e8f5e740ecff2cd4092794f355d50dce5edad2c5de9de49f98ca5af399f0", \controllers\Webhook::class,"index");
