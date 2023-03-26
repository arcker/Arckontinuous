<?php
namespace controllers;

use LatteTools\LattePrinter;
use Ubiquity\core\postinstall\Display;
use Ubiquity\log\Logger;
use Ubiquity\themes\ThemesManager;
use Ubiquity\views\engine\latte\Latte;
use Ubiquity\views\engine\latte\LatteTemplateGenerator;

/**
 * Controller IndexController
 */
class IndexController extends ControllerBase {

	public function index() {
		// $defaultPage = Display::getDefaultPage();
		// // echo $defaultPage;
		// $links = Display::getLinks();
		// $infos = Display::getPageInfos();

		// $activeTheme = ThemesManager::getActiveTheme();
		// $themes = Display::getThemes();
		// if (\count($themes) > 0) {
		// 	$this->loadView('@activeTheme/main/vMenu.html', \compact('themes', 'activeTheme'));
		// }
		//$this->loadView($defaultPage, \compact('defaultPage', 'links', 'infos', 'activeTheme'));
		// $this->render('@activeTheme/templates/index.latte');
		// echo "*****";
		$latte = new Latte;
		// $latte->
// $latte->setTempDirectory(__DIR__ . '/temp');
// $latte->setautoRefresh();
$parameters['items'] = ['one', 'two', 'three'];
		$latte->render('main/templates/index.latte', $parameters);
		// echo "-----";
		

// render to output
// $latte->render('template.latte', $parameters);

	}

	public function ct($theme) {
		$themes = Display::getThemes();
		if ($theme != null && \array_search($theme, $themes) !== false) {
			$config = ThemesManager::saveActiveTheme($theme);
			\header('Location: ' . $config['siteUrl']);
		} else {
			Logger::warn('Themes', \sprintf('The theme %s does not exists!', $theme), 'changeTheme(ct)');
			$this->forward(IndexController::class);
		}
	}
}
