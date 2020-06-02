<?php
namespace Plataforma\Controller;

use Plataforma\View\View;

class ListarController
{
	public function index()
	{
		$view = new View('site/listar.php');

		return $view->render();
	}
}