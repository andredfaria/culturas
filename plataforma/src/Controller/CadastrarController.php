<?php
namespace Plataforma\Controller;

use Plataforma\View\View;

class CadastrarController
{
	public function index()
	{
		$view = new View('site/cadastrar.php');
		return $view->render();
	}
}