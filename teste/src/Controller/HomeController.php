<?php
namespace Plataforma\Controller;

use Plataforma\View\View;

class HomeController
{
	public function index()
	{
		$view = new View('site/index.php');
		return $view->render();
	}
}