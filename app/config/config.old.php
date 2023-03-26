<?php
return array(
		"siteUrl"=>"http://127.0.0.1/Arckontinous/public/",
		"database"=>[
				"type"=>"mysql",
				"wrapper"=>"Ubiquity\db\providers\pdo\PDOWrapper",
				"dbName"=>getenv('DB_NAME'),
				"serverName"=>"127.0.0.1",
				"port"=>"3306",
				"user"=>getenv('DB_USER'),
				"password"=>getenv('DB_PASS'),
				"options"=>[],
				"cache"=>false
		],
		"sessionName"=>"Arckontinous",
		"namespaces"=>[],
		"templateEngine"=>'\Ubiquity\views\engine\latte\Latte',
		"templateEngineOptions"=>array("cache"=>false),
		"test"=>false,
		"debug"=>false,
		"logger"=>function(){return new \Ubiquity\log\libraries\UMonolog("Arckontinous",\Monolog\Logger::INFO);},
		"di"=>[],
		"cache"=>["directory"=>"cache/","system"=>"Ubiquity\\cache\\system\\ArrayCache","params"=>[]],
		"mvcNS"=>["models"=>"models","controllers"=>"controllers","rest"=>""]
);
